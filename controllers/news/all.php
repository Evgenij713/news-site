<?php
declare(strict_types=1);

$pageTitle = 'Главная страница';
$articles = getALLArticles();
foreach ($articles as $key => $article) {
    $articles[$key]['title'] = htmlspecialchars(cropText($article['title']));
    $articles[$key]['text_preview'] = htmlspecialchars(cropText($article['content']));
}
$pageContent = template('articles/v_all', ['articles' => $articles]);
