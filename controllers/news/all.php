<?php
declare(strict_types=1);

$pageTitle = 'Главная страница';
$articles = getALLArticles();
foreach ($articles as $id_c => $article) {
    $articles[$id_c]['title'] = htmlspecialchars(cropText($article['title']));
    $articles[$id_c]['text_preview'] = htmlspecialchars(cropText($article['content']));
}
$pageContent = template('articles/v_all', ['articles' => $articles]);