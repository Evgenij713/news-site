<?php
declare(strict_types=1);

$role = $user['role'] ?? '';
if ($role === 1 || $role === 2) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $pageTitle = 'Редактор категорий';
        $categories = getCategories();
        foreach ($categories as $id_c => $category) {
            $categories[$id_c]['name'] = htmlspecialchars($category['name']);
        }
        $pageContent = template('categories/v_all', ['categories' => $categories]);
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $response = ['res' => false, 'err' => [], 'currentUrl' => ''];
    
        if (idCheck($_POST['id'])) {
            if (canDeleteCategory((int)$_POST['id'])) {
                if (removeCategory((int)$_POST['id'])) {
                    $response['res'] = true;
                }
                else {
                    array_push($response['err'], 'Ошибка при удалении.');
                }
            }
            else {
                array_push($response['err'], 'Невозможно удалить категорию, так как в ней находятся статьи. Пожалуйста, перенесите эти статьи в другую категорию.');
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