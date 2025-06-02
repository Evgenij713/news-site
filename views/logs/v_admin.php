<h1>Просмотр логов</h1>
<form class="logs-form">
	<div class="form-group">
		<label for="dateLogs">Дата:</label>
		<input type="date" id="dateLogs" name="dateLogs" min="2025-01-13" class="form-control">
		<input type="hidden" id="date" name="date" value="<?=$date?>">
	</div>
</form>
<div id="logs"></div>
<script src="<?=BASE_URL?>assets/js/logs.js"></script>