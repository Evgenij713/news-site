<?php
declare(strict_types=1);

$role = $user['role'] ?? '';
if ($role === 1 || $role === 2) {
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$category = [];
		$id = (int)URL_PARAMS['id'];
		$category = getCategory($id);
	
		if(empty($category)) {
			header('Location:' . BASE_URL . 'e404');
    		exit();
		}
		else {
			$pageTitle = 'Просмотр категории';
			$category = htmlspecialchars($category['name']);
			$pageContent = template('categories/v_category', ['category' => $category]);
		}
	}
}
else {
	header('Location:' . BASE_URL . 'e403');
    exit();
}