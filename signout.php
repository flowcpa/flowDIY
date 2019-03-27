<?php

session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}

session_unset();

session_destroy();

header("Location: signin.php");

?>
