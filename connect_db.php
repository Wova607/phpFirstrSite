<?php
require_once 'ConfigDB.php';

try {
    $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $db = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);
  
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
    die();
}

