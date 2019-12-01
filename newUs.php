<?php
include_once 'model.php';

$newUser= new UserProfile();

$newUser->_name = $_POST['name'];
$newUser->_surname = $_POST['surname'];
$newUser->_login = $_POST['login'];
$newUser->_birdthday = $_POST['birthday'];
$newUser->_email = $_POST['email'];
$newUser->_phone = $_POST['phone'];
$newUser->_city = $_POST['city'];

if ($_POST['password']==$_POST['confirmpasword'])
{
    $newUser->_password = $_POST['password'];
}

include 'UserProfile.php';
?>