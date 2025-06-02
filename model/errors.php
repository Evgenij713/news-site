<?php
declare(strict_types=1);

function error404(): void {
	header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found', true, 404);
}

function error403(): void {
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden', true, 403);
}