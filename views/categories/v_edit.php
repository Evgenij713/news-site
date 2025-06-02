<h1>Редактировать категорию</h1>
<form class="appForm" method="post">
	<input type="hidden" name="type" value="category">
	<input type="hidden" name="id" value="<?=$category['id_category']?>">
	<div class="form-group">
		<label for="name">Название:</label>
		<input type="text" name="name" id="name" class="form-control" size="100" value="<?=$category['name']?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn send">Сохранить</button>
	</div>
	<div class="err"></div>
</form>
<script src="<?=BASE_URL?>assets/js/edit.js"></script>