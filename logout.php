<?php
session_start();
unset($_SESSION['pid']);
	session_destroy();
	header('location:admin.php');
    exit();
?>