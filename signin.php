<?php
	session_start();
	If(!isset($_SESSION['loginErrors'])){
		header("Location: index.php");
	}
	$errors = $_SESSION['loginErrors'];
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
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #00134d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.7;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  width:50%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
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
  $("#header").load("loginhead.html"); 
  $("#footer").load("footer.html"); 
});
</script>
</head>
<body>
<div id="header"></div>

<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="loginlock.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
	<?php
	foreach($errors as $row){
		?><p style="color: red;"><?php echo $row;?></p><?
		
	} 
	
	?>
    <label for="email"><b>email</b></label>
    <input type="text" placeholder="Enter Your Email Address" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
	<p>Don't have an account?</p>
	<a href="signup.php" type="button" class="btn btn-success btn-lg btn-block">Register to FlowDIY</a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
	<a href="index.php" class="btn btn-danger cancelbtn">Cancel</a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<div id="footer"></div>
</body>
</html>