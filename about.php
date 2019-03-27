<?php

include 'config.php';

session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>FlowDIY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


#footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
}
</style>
<script> 
$(function(){
  $("#header").load("header.php"); 
  $("#footer").load("footer.html"); 
});
</script>
<body>
<div id="header"></div>

<div id="footer"></div>
</body>
</html>