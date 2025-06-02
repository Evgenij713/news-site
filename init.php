<?php
declare(strict_types=1);

const HOST = 'http://localhost';
const BASE_URL = '/myproject8/';

const DB_HOST = 'localhost';
const DB_NAME = 'news';
const DB_USER = 'root';
const DB_PASS = '';
const DB_CHARSET = 'utf8mb4';

const SITE_CHARSET = 'UTF-8';

include_once('core/system.php');
include_once('core/db.php');
include_once('core/logs.php');
include_once('core/arr.php');
include_once('core/str.php');
include_once('core/auth.php');
include_once('model/articles.php');
include_once('model/categories.php');
include_once('model/users.php');
include_once('model/sessions.php');
include_once('model/errors.php');