<?php

require_once 'module/autoload.php';

define('UID', 'battle');
define('BASE_URL', '/');

$config =
[
    'srv'  => '127.0.0.1',
    'user' => 'admin',
    'pass' => '01478569',
    'db'   => 'battle',
];

date_default_timezone_set('Asia/Novosibirsk');

session_start();

if (isset($_GET['url'])) {
    $param = explode('/', $_GET['url']);
} else {
    $param = [];
}

if (isset($param[0])) {
    $action = $param[0];
} else {
    $action = 'index';
}


$db = new \ssp\module\Db($config);

$fullname = "controllers/" . $action . ".php";

if (file_exists($fullname)) {
    require_once $fullname;
} else {
    require_once 'views/404.html';
}
