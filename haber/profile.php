<?php include 'top.php' ; ?>
<?php if($_GET['user'] == 'me' )
{ 
$nickname = $_SESSION['nickname'];
?>

<body>
    <div id="skin-wrapper">
	<?php include 'inc/header_inc.php'; ?>
	<div id="skin-content">
	<?php include 'inc/left_profile_inc.php'; ?>
	<?php include 'inc/center_profile_inc.php'; ?>
	<?php include 'inc/sidebar.php'; ?>
	</div>
		<?php include 'inc/footer.php'; ?>
	</div>
	</body>
	</html>
	<?php }else 
{
echo 'hata'; print_r($_SESSION);
}	?>