<?php
declare(strict_types=1);

function logout(): void {
	unset($_SESSION['token']);
	setcookie('token', '', time() - 1, BASE_URL);
}
function authGetUser() : ?array{
	$user = null;

	$token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;

	if($token !== null){
		$session = sessionsOne($token);
		
		if($session !== null){
			$user = usersById($session['user']);
		}

		if($user === null){
			logout();
		}
	}

	return $user;
}

function authCreateSession(int $id_user): void {
	$token = substr(bin2hex(random_bytes(128)), 0, 128);
	sessionsAdd($id_user, $token);
	$_SESSION['token'] = $token;
}