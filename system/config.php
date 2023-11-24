<?php

const SITE = [
    'domain' => 'localhost',
    'protocol' => 'http',
    'base_url' => '/to-do-list'
];

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

const DEBUG = true;

const PATHS = [
    'system' => __DIR__,
    'views' => __DIR__ . '/views',
    'controllers' => __DIR__ . '/controllers',
    'models' => __DIR__ . '/models'
];