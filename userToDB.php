<?php
include_once "connect_db.php";

$name=$_POST['name'];
$surname=$_POST['surname'];

$birdthdaytext =$_POST['birthday'];
$birdthday=prepstr($birdthdaytext);

$email =$_POST['email'];
$phone =$_POST['phone'];
$city =$_POST['city'];
$login =$_POST['login'];
$password= password_hash($_POST['password'], PASSWORD_DEFAULT);

function prepstr($str)
{
$newstr=substr($str,strlen($str)-4,5);
$newstr.="-";
$newstr.=substr($str,strlen($str)-7,2);
$newstr.="-";
$newstr.=substr($str,strlen($str)-10,2);
return $newstr;
}


try{
$sql = "INSERT INTO tbl_user(Name, Surname, Birdthday, Email, Phone, City, Login, Password) VALUES (?, ?, ?, ?, ?, ?, ?)";
$isql = $dbh->prepare($sql);
$count=$isql->execute([$name, $surname, $birdthday, $email, $phone, $login, $password]);
}catch (PDOException $e) {
    echo 'Запис не додано в базу: ' . $e->getMessage();
    die();
}


header("Location: /index.php");
exit;
