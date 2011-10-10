<?php
include 'config.php';
unset ($_SESSION['user_id']);
unset ($_SESSION['role_id']);

session_destroy();
print_r($_SESSION);

header("Location: index.php");

?>
