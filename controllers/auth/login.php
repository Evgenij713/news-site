<?php
declare(strict_types=1);

if ($user === null) {
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$pageTitle = 'Страница авторизации';
		$pageContent = template('auth/v_login');
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$response = ['res' => false, 'err' => [], 'currentUrl' => BASE_URL];
		
		if (isset($_POST['operation']) && $_POST['operation'] === 'login') {
			$fields = extractFields($_POST, ['login', 'password']);
			$remember = isset($_POST['remember']);
		
			$response['err'] = validateUserInput($fields);
			
			if (empty($response['err'])) {
				$user = usersOne($fields['login']);
				if ($user !== null && password_verify($fields['password'], $user['password'])) {
					authCreateSession((int)$user['id_user']);
					if($remember) {
						setcookie('token', $token, time() + 3600 * 24 * 30, BASE_URL);
					}
					$response['res'] = true;
				}
				else {
					array_push($response['err'], 'Неверный логин или пароль.');
				}
			}
		}
		echo json_encode($response, JSON_UNESCAPED_UNICODE);
		exit();
	}
}
else {
	header('Location:' . BASE_URL);
	exit();
}
