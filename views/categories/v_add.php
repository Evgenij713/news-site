<h1>Добавить категорию</h1>
<form class="appForm" method="post">
	<div class="form-group">
		<label for="name">Название:</label>
		<input type="text" name="name" id="name" class="form-control" size="100">
	</div>
	<div class="form-group">
		<button type="submit" class="btn send">Отправить</button>
	</div>
	<div class="err"></div>
</form>
<script src="<?=BASE_URL?>assets/js/add.js"></script>