<?php
declare(strict_types=1);

$role = $user['role'] ?? '';
$id = URL_PARAMS['id'];

if ($role === 1 || $role === 2) {
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {	
		$category = getCategory((int)$id);
		if (empty($category)) {
			header('Location:' . BASE_URL . 'e404');
    		exit();
		}
		else {
			$pageTitle = 'Редактирование категории';
			$category['name'] = htmlspecialchars($category['name']);
			$pageContent = template('categories/v_edit', ['category' => $category]);
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$response = ['res' => false, 'err' => [], 'lastInsertId' => '', 'currentUrl' => BASE_URL];
	
		if (idCheck($id)) {
			$fields = extractFields($_POST, ['name']);

			$response['err'] = validateCategoryName($fields);
			
			if (empty($response['err'])) {
				if (editCategory((int)$id, $fields)) {
					$response['res'] = true;
				}
				else {
					array_push($response['err'], 'Ошибка при редактировании.');
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