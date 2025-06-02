<?php
declare(strict_types=1);

$id_user = $user['id_user'] ?? '';
$role = $user['role'] ?? '';
$id = URL_PARAMS['id'];
$article = getArticle((int)$id);

if ($article['id_user'] === $id_user || $role === 1 || $role === 2) {
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		if (empty($article)) {
			header('Location:' . BASE_URL . 'e404');
    		exit();
		}
		else {
			$pageTitle = 'Редактирование статьи';
			$article['date'] = date('Y-m-d', strtotime($article['date_add']));
			$article['time'] = date('H:i:s', strtotime($article['date_add']));
			$article['title'] = htmlspecialchars($article['title']);
			$article['content'] = htmlspecialchars($article['content']);
			$categories = getCategories();
			foreach ($categories as $id_c => $category) {
				$categories[$id_c]['name'] = htmlspecialchars($category['name']);
			}
			$pageContent = template('articles/v_edit', ['article' => $article, 'categories' => $categories]);
		}
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$response = ['res' => false, 'err' => [], 'lastInsertId' => '', 'currentUrl' => BASE_URL];

		if (idCheck($id)) {
			$fields = extractFields($_POST, ['title', 'content', 'category']);
			
			$auxiliaryFields = extractFields($_POST, ['date', 'time']);
			$fields['date_add'] = $auxiliaryFields['date'] . ' ' . $auxiliaryFields['time'];

			$response['err'] = validateArticleInput($fields);
			
			if (empty($response['err'])) {
				if (editArticle((int)$id, $fields)) {
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