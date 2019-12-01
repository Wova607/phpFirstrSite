<?php
require_once 'ConfigDB.php';

try {
    $dbh = new PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME,
        DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".DB_CHARSET));
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
    die();
}
