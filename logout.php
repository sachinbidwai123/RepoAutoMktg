<?php
ob_start();
session_start();
$_SESSION["user_id"] = "";
$_SESSION["user_login"] ="";
session_destroy();
echo "<script type='text/javascript'>window.location.href='login.php';</script>";
?>