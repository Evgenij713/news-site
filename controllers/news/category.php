<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $articles = [];
  $id = (int)URL_PARAMS['id'];
  $articles = getArticlesCategory($id );
  if (empty($articles)) {
    header('Location:' . BASE_URL . 'e404');
    exit();
  }
  else {
    $pageTitle = 'Новости категории';
    $category = getCategory($id);
    $category['name'] = htmlspecialchars($category['name']);
    foreach ($articles as $key => $article) {
      $articles[$key]['title'] = htmlspecialchars(cropText($article['title']));
      $articles[$key]['text_preview'] = htmlspecialchars(cropText($article['content'])) . '...';
    }
    $pageContent = template('articles/v_category', ['category' => $category, 'articles' => $articles]);
  }
}
