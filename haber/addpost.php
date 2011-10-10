<?php 
include 'config.php';
require_once 'library/datalayer.php';
$datalayer = new datalayer();
print_r($_REQUEST);
$category = $_POST['category'];
if($_SESSION['role_id'] == 4)
{
$status = 2;

}
$order = 1;
$comment_status = 1;
$date = date('Y-m-d H:i:s');
$data = array($_SESSION['user_id'],$_POST['subtitle'],$_POST['title'],$_POST['content'],$status,$date,0,0,$_SESSION['role_id']);

$datalayer->newPost($data,$status,$category,$order);

echo mysql_error();
?>