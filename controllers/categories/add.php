<?php
declare(strict_types=1);

$role = $user['role'] ?? '';
if ($role === 1 || $role === 2) {
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$pageTitle = 'Добавление категории';
		$pageContent = template('categories/v_add');
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$response = ['res' => false, 'err' => [], 'lastInsertId' => ''];
	
		$fields = extractFields($_POST, ['name']);

		$response['err'] = validateCategoryName($fields);
		
		if (empty($response['err'])) {
			addCategory($fields);
			$response['lastInsertId'] = getLastInsertId();
			$response['res'] = true;
		}
		
		echo json_encode($response, JSON_UNESCAPED_UNICODE);
		exit();
	}
}
else {
	header('Location:' . BASE_URL . 'e403');
    exit();
}
