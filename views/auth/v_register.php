<div class="registration">
	<div class="registration-container">
		<h1>Регистрация</h1>
		<form method="post" id="login-form">
			<input type="hidden" name="operation" value="register">
			<div class="input-group">
				<label for="name">Имя:</label>
				<input type="text" id="name" name="name" required>
			</div>
			<div class="input-group">
				<label for="email">Email:</label>
				<input type="text" id="email" name="email" required>
			</div>
			<div class="input-group">
				<label for="login">Логин:</label>
				<input type="text" id="login" name="login" required>
			</div>
			<div class="input-group">
				<label for="password">Пароль:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<div class="input-group">
				<label for="repeat-password">Повторите пароль:</label>
				<input type="password" id="repeat-password" name="repeat-password" required>
			</div>
			<button type="submit" class="register-btn">Зарегистрироваться</button>
		</form>
		<p class="login-link">Уже есть аккаунт? <a href="<?=BASE_URL?>login">Войти</a></p>
		<div class="err"></div>
	</div>
</div>
<script src="<?=BASE_URL?>assets/js/auth.js"></script>