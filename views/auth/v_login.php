<div class="login">
	<div class="login-container">
		<h2 class="auth">Авторизация</h2>
		<form id="login-form" method="post">
			<input type="hidden" name="operation" value="login">
			<div class="input-group">
				<label for="username">Логин</label>
				<input type="text" id="login" name="login" required>
			</div>
			<div class="input-group">
				<label for="password">Пароль</label>
				<input type="password" id="password" name="password" required>
			</div>
			<div class="input-group remember-me">
				<input type="checkbox" id="remember-me" name="remember-me">
				<label for="remember-me">Запомнить меня</label>
			</div>
			<button type="submit">Войти</button>
		</form>
		<div class="register-link">
            <p>Нет учетной записи? <a href="<?=BASE_URL?>register">Зарегистрируйтесь</a></p>
        </div>
		<div class="err"></div>
	</div>
</div>
<script src="<?=BASE_URL?>assets/js/auth.js"></script>