<?php
declare(strict_types=1);

return (function(): array{
	$intGT0 = '[1-9]+\d*';
	$normDate = '\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])';

	return [
		[
			'test' => '/^$/',
			'controller' => 'news/all'
		],
		[
			'test' => "/^article\/($intGT0)\/?$/",
			'controller' => 'news/article',
			'params' => ['id' => 1]
		],
		[
			'test' => '/^article\/add\/?$/',
			'controller' => 'news/add'
		],
		[
			'test' => "/^article\/edit\/($intGT0)\/?$/",
			'controller' => 'news/edit',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^news\/category\/($intGT0)\/?$/",
			'controller' => 'news/category',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^categories\/?$/",
			'controller' => 'categories/all'
		],
		[
			'test' => "/^category\/($intGT0)\/?$/",
			'controller' => 'categories/category',
			'params' => ['id' => 1]
		],
		[
			'test' => '/^category\/add\/?$/',
			'controller' => 'categories/add'
		],
		[
			'test' => "/^category\/edit\/($intGT0)\/?$/",
			'controller' => 'categories/edit',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^category\/delete\/($intGT0)\/?$/",
			'controller' => 'categories/delete',
			'params' => ['id' => 1]
		],
		[
			'test' => '/^logs\/?$/',
			'controller' => 'logs'
		],
		[
			'test' => "/^logs\/($normDate)\/?$/",
			'controller' => 'logs',
			'params' => ['date' => 1]
		],
		[
			'test' => '/^register\/?$/',
			'controller' => 'auth/register'
		],
		[
			'test' => '/^login\/?$/',
			'controller' => 'auth/login'
		],
		[
			'test' => '/^logout\/?$/',
			'controller' => 'auth/logout'
		],
		[
			'test' => '/^e403\/?$/',
			'controller' => 'errors/e403'
		],
		[
			'test' => '/^e404\/?$/',
			'controller' => 'errors/e404'
		]
	];
})();