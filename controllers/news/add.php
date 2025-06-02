<?php
declare(strict_types=1);

if ($user !== null) {
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$pageTitle = 'Добавление статьи';
		$categories = getCategories();
		foreach ($categories as $id_c => $category) {
			$categories[$id_c]['name'] = htmlspecialchars($category['name']);
		}
		$pageContent = template('articles/v_add', ['categories' => $categories]);
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$response = ['res' => false, 'err' => [], 'lastInsertId' => ''];
	
		$fields = extractFields($_POST, ['title', 'content', 'category']);
		
		$auxiliaryFields = extractFields($_POST, ['date', 'time']);
		$fields['date_add'] = $auxiliaryFields['date'] . ' ' . $auxiliaryFields['time'];
		
		$fields['id_user'] = (string)$user['id_user'];

		$response['err'] = validateArticleInput($fields);

		if (empty($response['err'])) {
			addArticle($fields);
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