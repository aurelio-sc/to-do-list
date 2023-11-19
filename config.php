<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'to_do_list';

$mysqli = new mysqli($host,$user,$password,$database);

if ($error = $mysqli->connect_errno) {
    die('Error code: ' . $error);
}

?>