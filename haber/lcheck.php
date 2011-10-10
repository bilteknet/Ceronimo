<?php 
include 'config.php';
if(empty($_SESSION['user_id']) OR $_SESSION['user_id'] == '')
{
header("Location: index.php");
}

?>