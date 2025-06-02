<!-- Кнопки редактирования и удаления -->
<div class="article-actions item">
	<?php if ($article['id_user'] === $id_user || $role === 1 || $role === 2): ?>
		<p><a href="<?=BASE_URL?>article/edit/<?=$article['id_article']?>" class="btn edit-btn">Редактировать</a></p>
		<form class="appForm deleteForm" method="post">
			<button type="submit" class="btn delete-btn">Удалить</button>
		</form>
	<?php endif; ?>
</div>
<div class="err"></div>
<hr>
<!-- Содержимое статьи -->
<div class="article-details">
	<h1><?=$article['title']?></h1>
	<p class="date"><?=$article['date_add']?></p>
	<p class="category">Категория: <a href="<?=BASE_URL?>news/category/<?=$article['id_category']?>"><?=$article['category']?></a></p>
	<div class="article-content"><?=$article['content']?></div>
</div>
<script src="<?=BASE_URL?>assets/js/delete.js"></script>