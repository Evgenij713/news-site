<?php

	function sessionsAdd(int $idUser, string $token) : bool{
		$params = ['uid' => $idUser, 'token' => $token];
		$sql = "INSERT sessions (user, token) VALUES (:uid, :token)";
		dbQuery($sql, $params);
		return true;
	}

	function sessionsOne(string $token) : ?array{
		$sql = "SELECT * FROM sessions WHERE token=:token";
		$query = dbQuery($sql, ['token' => $token]);
		$session = $query->fetch();
		return $session === false ? null : $session;
	}