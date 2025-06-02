<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	logout();
	header('Location: ' . BASE_URL);
	exit();
}