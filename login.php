<?php
If(!isset($_SESSION['loginErrors'])){
	header("Location: index.php");
}
include 'config.php';
session_start();
$username = "";
$email    = "";
$_SESSION['loginErrors'] = array(); 

$email = $_POST['email'];
$password = $_POST['psw'];

$password = md5($password);
$stmt = $conn->prepare("SELECT * FROM cpaUser WHERE Email='$email' and Password = '$password';");
$stmt->execute();
$user = $stmt->fetch();
	
if ($user) {
	$_SESSION['username'] = $user['Name'];
	$_SESSION['email'] = $user['Email'];
	header("Location: home.php");	
}else{
	array_push($_SESSION['loginErrors'], "Invalid Email/Passsword");
	header("Location: signin.php");
}

