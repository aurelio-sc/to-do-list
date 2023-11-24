<?php

const URL_BASE = '/to-do-list';
const DEBUG = true;

const DATA_BASE_CONFIG = [
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'dbname' => 'to_do_list',
    'username' => 'root',
    'password' => '',
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];

function path($alias) {
    $paths = [
        'system' => __DIR__ . '/system',
        'views' => __DIR__ . '/system/views',
        'controllers' => __DIR__ . '/system/controllers',
        'models' => __DIR__ . '/system/models'
    ];
    return $paths[$alias];
}

