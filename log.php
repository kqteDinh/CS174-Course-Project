<?php
require_once 'login.php';
$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die ( $connection->connect_error);
    return $connection;
?>