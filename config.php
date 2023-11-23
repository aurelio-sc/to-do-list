<?php
//Connection
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'to_do_list';

$mysqli = new mysqli($host,$user,$password,$database);

if ($error = $mysqli->connect_errno) {
    die('Error code: ' . $error);
}

function path($alias) {
    $paths = [
        'views' => __DIR__ . '/system/views',
        'controllers' => __DIR__ . '/system/controllers',
        'models' => __DIR__ . '/system/models'
    ];
    return $paths[$alias];
}

const URL_BASE = '/to-do-list';