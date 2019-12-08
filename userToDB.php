<?php
include_once "connect_db.php";

$name=$_POST['name'];
$surname=$_POST['surname'];

$birdthdaytext =$_POST['birthday'];

include_once "func.php";
$birdthday=prepdate($birdthdaytext);

$email =$_POST['email'];
$phone =$_POST['phone'];
$city =$_POST['city'];
$login =$_POST['login'];
$password= password_hash($_POST['password'], PASSWORD_DEFAULT);




try{
$sql = "INSERT INTO tbl_user (Name, Surname, Birdthday, Email, Phone, City, Login, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$isql = $dbh->prepare($sql);
$count=$isql->execute([$name, $surname, $birdthday, $email, $phone, $city, $login, $password]);
}catch (PDOException $e) {
    echo 'Запис не додано в базу: ' . $e->getMessage();
    die();
}


header("Location: /index.php");
exit;
