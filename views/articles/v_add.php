<h1>Добавить статью</h1>
<form class="appForm" method="post">
	<div class="form-group">
		<label for="date">Дата:</label>
		<input type="date" id="date" name="date" class="form-control">
		<label for="time">Время:</label>
		<input type="time" id="time" name="time" step="1" class="form-control">
	</div>
	<div class="form-group">
		<label for="title">Заголовок:</label>
		<input type="text" name="title" id="title" class="form-control" size="100">
	</div>
	<div class="form-group">
		<label for="content">Текст:</label>
		<textarea rows="10" cols="100" name="content" id="content" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="category">Категория:</label>
		<select name="category" id="category" class="form-control">
			<?php foreach($categories as $category): ?>
				<option value="<?=$category['id_category']?>"><?=$category['name']?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn send">Отправить</button>
	</div>
	<div class="err"></div>
</form>
<script src="<?=BASE_URL?>assets/js/add.js"></script>