<?php
	session_start();
	$errors = $_SESSION['errors'];
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

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.signupbtn {
  padding: 14px 20px;
  float:right;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: center;
  width: 48%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  width:50%;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
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
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
   
});
</script>
<body>
<div id="header"></div>
<form action="register.php" method = 'post' style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up to FlowDIY!</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<?php
	foreach($errors as $row){
		?><p style="color: red;"><?php echo $row;?></p><?
		
	} 
	
	?>
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <p>By creating an account you agree to our <font color="blue">Terms & Privacy</font>.</p>

    <div class="clearfix">
	  <a href="index.php" style="margin: 5px;" type="button" class="btn btn-danger cancelbtn">Cancel</a>
	  <button  style="margin: 5px;" type="submit" class="btn btn-success signupbtn" name="reg_user">Register</button>

    </div>
  </div>
</form>
<div id="footer"></div>
</body>
</html>