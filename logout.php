<?php include("shared/header.php"); ?>
<?php include("shared/navbar.php"); ?>
<?php include("functions/login-functions.php");
var_dump(isset($_SESSION["username"]));
$_SESSION = array();
session_destroy();
var_dump(isset($_SESSION["username"]));
redirect("login.php");