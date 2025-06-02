<?php
declare(strict_types=1);

$article = [];
$id = URL_PARAMS['id'];
$article = getArticle((int)$id);
$id_user = $user['id_user'] ?? '';
$role = $user['role'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	if(empty($article)) {
		header('Location:' . BASE_URL . 'e404');
    	exit();
	}
	else {
		$pageTitle = 'Просмотр статьи';
		$article['title'] = htmlspecialchars($article['title']);
		$article['content'] = htmlspecialchars($article['content']);
		$article['category'] = htmlspecialchars($article['category']);
		$pageContent = template('articles/v_article', ['article' => $article, 'id_user' => $id_user, 'role' => $role]);
	}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$response = ['res' => false, 'err' => [], 'currentUrl' => BASE_URL];
	
	if ($article['id_user'] === $id_user || $role === 1 || $role === 2) {
		if (idCheck($id)) {
			if (removeArticle((int)$id)) {
				$response['res'] = true;
			}
			else {
				array_push($response['err'], 'Ошибка при удалении.');
			}
		}
	}
	else {
		array_push($response['err'], 'Доступ запрещён.');
	}
	
	echo json_encode($response, JSON_UNESCAPED_UNICODE);
	exit();
}