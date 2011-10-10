<?php
session_start();
require_once 'library/user.php';
$user = new User();
$user->user_id = $_SESSION['user_id'];
// kullanıcı değerlerini sessiona atıyoruz : 
$userData = $user->getUserData(array('username','first_name','last_name','email','gender','brithday','status','role_id'));
$user->setUserData($userData);
?>
