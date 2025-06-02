<h1><?=$category['name']?></h1>
<div class="articles">
    <?php foreach($articles as $article): ?>
        <article class="article">
            <h2 class="article__title"><?=$article['title']?></h2>
            <p class="article__date"><?=$article['date_add']?></p>
            <div class="article__content">
                <p><?=$article['text_preview']?> <a href="<?=BASE_URL?>article/<?=$article['id_article']?>" class="article__link">Подробнее...</a></p>
            </div>
        </article>
    <?php endforeach; ?>
</div>