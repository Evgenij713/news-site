<?php
declare(strict_types=1);

if ($user === null) {
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$pageTitle = 'Регистрация';
		$pageContent = template('auth/v_register');
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$response = ['res' => false, 'err' => [], 'currentUrl' => BASE_URL];
		
		if (isset($_POST['operation']) && $_POST['operation'] === 'register') {
			$fields = extractFields($_POST, ['name', 'email', 'login', 'password', 'repeat-password']);
	
			$response['err'] = validateUserInput($fields);
			
			if (empty($response['err'])) {
				if (usersOne($fields['login']) === null) {
					$fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
					unset($fields['repeat-password']);
					createUser($fields);

					$user = usersOne($fields['login']);
					authCreateSession((int)$user['id_user']);

					$response['res'] = true;
				}
				else {
					array_push($response['err'], 'Такой логин уже зарегистрирован.');
				}
			}
		}
		echo json_encode($response, JSON_UNESCAPED_UNICODE);
		exit();
	}
}
else {
    header('Location:' . BASE_URL . 'e403');
    exit();
}