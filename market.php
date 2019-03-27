<?php

include 'config.php';

session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}

$email = $_SESSION['email'];

$stmt = $conn->prepare("SELECT * FROM cpaUser WHERE Email='$email';");
$stmt->execute();
$user = $stmt->fetch();

$apps = $user['Apps'];
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

<script> 
$(function(){
  $("#header").load("header.php"); 
  $("#footer").load("footer.html");

});
</script>
<script>
	$(document).ready(function(){
		
		var data = <?php echo $apps;?>;
		if(data.includes("Xero")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' class='img-responsive img-circle' src='apps/xero.png' style='height:100px; width:100px; '><figcaption>Xero</figcaption></figure></div>"); 
				}
				
				if(data.includes("Xero Basic")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Basic</figcaption></figure></div>"); 
				}
				
				if(data.includes("Xero Premium")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Premium</figcaption></figure></div>"); 
				}
				
				if(data.includes("Xero Standard")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Standard</figcaption></figure></div>"); 
				}
				
				if(data.includes("Xero Expense")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' style='height:100px; width:100px;' class='img-responsive img-circle' ><figcaption>Xero Expense</figcaption></figure></div>"); 
				}
				
				if(data.includes("A2X")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/a2x.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>A2X</figcaption></figure></div>"); 
				}
				
				if(data.includes("Cin7")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/cin7.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Cin7</figcaption></figure></div>"); 
				}
				
				if(data.includes("Expensify")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/expensify.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Expensify</figcaption></figure></div>"); 
				}
				
				if(data.includes("gocardless")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/gocardless.jpg' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>gocardless</figcaption></figure></div>"); 
				}
				
				if(data.includes("HUBDOC")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/hubdoc.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>HUBDOC</figcaption></figure></div>"); 
				}
				
				if(data.includes("CRM")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/insightlyCRM.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>CRM</figcaption></figure></div>"); 
				}
				
				if(data.includes("Jobber")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/jobber.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Jobber</figcaption></figure></div>"); 
				}
				
				if(data.includes("Mind and Body")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/mindbody.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>XERO</figcaption></figure></div>"); 
				}
				
				if(data.includes("Shopify")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/shopify.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Shopify</figcaption></figure></div>"); 
				}
				
				if(data.includes("square")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/square.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>square</figcaption></figure></div>"); 
				}
				
				if(data.includes("Trello")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/trello.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Trello</figcaption></figure></div>"); 
				}
				
				if(data.includes("Unleashed")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/unleashed.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Unleashed</figcaption></figure></div>"); 
				}
				
				if(data.includes("VEND")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/vend.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>VEND</figcaption></figure></div>"); 
				}
				
				if(data.includes("VENDHQ")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/vend.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>VENDHQ</figcaption></figure></div>"); 
				}
				
				if(data.includes("loft")){
					$("#appSuggest").append("<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'><figure style='margin: 30px;'><img id='hov' src='apps/loft.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>loft</figcaption></figure></div>"); 
				}
	});
</script> 
<style>
figure figcaption {
   
	margin-top: 5px;
}
figure{
	display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
#footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
   background-color:grey;
   opacity: 0.5;
}
#hov:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
</style>
</head>
<body>
<div id="header"></div>
<div class="row"><div class="col-lg-6 col-lg-offset-3 text-center">
<div id="screen" class="screen">
			
			
			<div class="row" id="appSuggest">
					
					
			</div>
			
			<div id="bttn">
				<h4>These are the recommended apps for your Business. To access these apps on discounted price, register with FlowDIY!</h4>
				
			</div>
                
				
</div></div></div>
<div id="footer"></div>
</body>
</html>

