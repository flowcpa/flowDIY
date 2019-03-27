<?php
	session_start();
	$_SESSION['errors'] = array(); 
	$_SESSION['loginErrors'] = array();
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
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script>
<script>
	$(document).ready(function(){
		$("#bttn").hide();
		$("#que4no").click(function(){
			$("input[name=que41]").attr('disabled', true);
			$("input[name=que42]").attr('disabled', true);
		
		});
		$("#que4yes").click(function(){
			$("input[name=que41]").attr('disabled', false);
			$("input[name=que42]").attr('disabled', false);
		
		});
		$("#que6no").click(function(){
			$("input[name=que61]").attr('disabled', true);
		
		});
		$("#que6yes").click(function(){
			$("input[name=que61]").attr('disabled', false);
		
		
		});
		$("#que7no").click(function(){
			$("input[name=que71]").attr('disabled', false);
			
		});
		$("#que7yes").click(function(){
			$("input[name=que71]").attr('disabled', true);
			
		});
		$("#que9no").click(function(){
			$("input[name=que91]").attr('disabled', true);
			
		});
		$("#que9yes").click(function(){
			$("input[name=que91]").attr('disabled', false);
			
		});
		$("#next").click(function(){
		  const que1 = $('#industry').val();
		  const que2 = $('input[name=que2]:checked').val();
		  const que3 = $('input[name=que3]:checked').val();
		  const que4 = $('input[name=que4]:checked').val();
		  const que41 = $('input[name=que41]:checked').val();
		  const que42 = $('input[name=que42]:checked').val();
		  const que5 = $('input[name=que5]:checked').val();
		  const que6 = $('input[name=que6]:checked').val();
		  const que61 = $('input[name=que61]:checked').val();
		  const que7 = $('input[name=que7]:checked').val();
		  const que71 = $('input[name=que71]:checked').val();
		  const que8 = $('input[name=que8]:checked').val();
		  const que9 = $('input[name=que9]:checked').val();
		  const que91 = $('input[name=que91]:checked').val();
		  const que10 = $('input[name=que10]:checked').val();
			
		  $.ajax({
			url: "questionnaire.php",
			data: {industry: que1, location: que2, structure: que3, employee: que4, nEmployee: que41, payMethod: que42, reimburse: que5, sale: que6,saleMethod: que61, inventory: que7, offerService: que71, nInvoice: que8, creditCard: que9, nTransaction: que91, technology: que10},
			type: "POST",
			success: function(data){
				console.log(data);
				$("#bttn").show();
				$("#form").hide();
				$("#appSuggest").show();
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
			}
		  });
		  
		  
		  
		}); 
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
			<div id="form">
                <form method="get">
                    <div class="text-left"><div id="question1"><legend><h2>1. What Industry are you in?</h2></legend></div>
                    <br>
					 <select class="form-control" id="industry">
					  <option selected>Select from the  drop-down list</option>
					  <option value="eCommerce">E-commerce</option>
					  <option value="construction">Construction</option>
					  <option value="retailTrade">Retail Trade</option>
					  <option value="manufacturing">Manufacturing</option>
					  <option value="scientific">Scientific and Technical Services</option>
					  <option value="financial">Financial and Insuance</option>
					  <option value="realEstate">Real Estate</option>
					  <option value="it">Information Technology</option>
					  <option value="education">Education and Training</option>
					  <option value="health">Health Care & Social Assistance</option>
					  <option value="arts">Arts and Recreation Services</option>
					</select>
					</div> 
					<br><br>
					<div class="text-right"><div id="question2"><legend><h3>2. Bussiness Location</h3></legend></div>
                    <br>
					
					<label><input type="radio" name="que2" value="outside" required>Outside of Canada</label><br>
                    <label><input type="radio" name="que2" value="gInside">Inside of Canada and invoices > 5</label><br>
                    <label><input type="radio" name="que2" value="lInside">Inside of Canada and invoices <= 5</label></div>
                
								
                    <br><br>
					<div class="text-left"><div id="question3"><legend><h1>3. What is your business Structure? </h1></legend></div>
                    <br>
					
					<label><input type="radio" name="que3" value="incorporated" required>Incorporated</label><br>
                    <label><input type="radio" name="que3" value="sole">Sole-practitioner</label><br>
                    <label><input type="radio" name="que3" value="partnership">Partnership</label><br>
					<label><input type="radio" name="que3" value="notSure">Not Sure</label></div>
                
					<br><br>			
					<div class="text-right"><div id="question4"><legend><h2>4.	Do you have any employees? </h2></legend></div>
                    <br>
					
					<label><input type="radio" name="que4" id="que4yes" value="yes" required>Yes</label><br>
                    <label><input type="radio" name="que4" id="que4no" value="no">No</label></div>
                    
								
                    <br><br>
					<div class="text-left"><div id="question41"><legend><h3>4.1  If Yes> How Many employees do you have?  </h3></legend></div>
                    <br>
					
					<label><input type="radio" name="que41" value="1-5">1-5</label><br>
                    <label><input type="radio" name="que41" value="6-10">6-10</label><br>
                    <label><input type="radio" name="que41" value="11-20">11-20</label><br>
					<label><input type="radio" name="que41" value="20+">20+</label></div>
                
					<br><br>
					
					<div class="text-right"><div id="question42"><legend><h1>4.2  If Yes> How do you pay them?  </h1></legend></div>
                    <br>
					
					<label><input type="radio" name="que42" value="weekly">Weekly</label><br>
                    <label><input type="radio" name="que42" value="bi-weekly">Bi-Weekly</label><br>
                    <label><input type="radio" name="que42" value="monthly">Monthly</label><br>
					<label><input type="radio" name="que42" value="bi-monthly">Bi-Monthly</label></div>
                
					<br><br>
					
					<div class="text-left"><div id="question5"><legend><h2>5. Do you reimburse expenses to your employees?</h2></legend></div>
                    <br>
					
					<label><input type="radio" name="que5" value="yes" required>Yes</label><br>
                    <label><input type="radio" name="que5" value="no">No</label></div>
                
					<br><br>
					
					<div class="text-right"><div id="question6"><legend><h3>6. Do you sale Products ?</h3></legend></div>
                    <br>
					
					<label><input type="radio" name="que6" id="que6yes" value="yes" required>Yes</label><br>
                    <label><input type="radio" name="que6" id="que6no" value="no">No</label></div>
                
					<br><br>
					
					<div class="text-left"><div id="question61"><legend><h1>6.1 if Yes > Do you Sale Online or from a store</h1></legend></div>
                    <br>
					
					<label><input type="radio" name="que61" value="online">Online</label><br>
                    <label><input type="radio" name="que61" value="store">Store</label><br>
					<label><input type="radio" name="que61" value="both">Both</label></div>
                
					<br><br>
					
					<div class="text-right"><div id="question7"><legend><h2>7. Do you keep inventory?</h2></legend></div>
                    <br>
					
					<label><input type="radio" name="que7" id="que7yes" value="yes" required>Yes</label><br>
                    <label><input type="radio" name="que7" id="que7no" value="no">No</label></div>
                
					<br><br>
					
					<div class="text-left"><div id="question71"><legend><h3>7.1 If No from Products> Do you offer Services?</h3></legend></div>
                    <br>
					
					<label><input type="radio" name="que71" value="yes">Yes</label><br>
                    <label><input type="radio" name="que71" value="no">No</label></div>
                
					<br><br>
					
					<div class="text-right"><div id="question8"><legend><h1>8. How Many Invoices you create every month?</h1></legend></div>
                    <br>
					
					<label><input type="radio" name="que8" value="1-5">1-5</label><br>
                    <label><input type="radio" name="que8" value="6-10">6-10</label><br>
                    <label><input type="radio" name="que8" value="11-20">11-20</label><br>
					<label><input type="radio" name="que8" value="20+">20+</label></div>
                
					<br><br>
					
					<div class="text-left"><div id="question9"><legend><h2>9. Do you accept credit cards for payments?</h2></legend></div>
                    <br>
					
					<label><input type="radio" name="que9" id="que9yes"value="yes" required>Yes</label><br>
                    <label><input type="radio" name="que9" id="que9no" value="no">No</label></div>
                
					<br><br>
					
					<div class="text-right"><div id="question9"><legend><h3>9.1 if Yes> How many transactions you have each month</h3></legend></div>
                    <br>
					
					<label><input type="radio" name="que91" value="1-10">1-10</label><br>
                    <label><input type="radio" name="que91" value="11-30">11-30</label><br>
                    <label><input type="radio" name="que91" value="30+">30+</label></div>
					
					<br><br>
					
					<div class="text-left"><div id="question10"><legend><h2>10. How confortable you feel with technology?</h2></legend></div>
                    <br>
					
					<label><input type="radio" name="que10" value="awesome">Awesome</label><br>
                    <label><input type="radio" name="que10" value="somewhat">I'm somewhat confortable</label><br>
                    <label><input type="radio" name="que10" value="hard">It's hard to keep up to date</label></div>
					
					<br><br>
					
                    <input type ="button"  id="next" value="Submit" class="btn btn-primary btn-lg btn-block">
					<br><br>
					<br><br>
                </form>
			</div>	
			
			<div class="row" id="appSuggest">
					
					
			</div>
			
			<div id="bttn">
				<h4>These are the recommended apps for your Business. To access these apps on discounted price, register with FlowDIY!</h4>
				<a href="register.html" type="button" class="btn btn-success btn-lg btn-block">Register to FlowDIY</a>
				<a href="index.html" type="button" class="btn btn-primary btn-lg btn-block">Fill the Form again!</a>
			</div>
                
				
</div></div></div>
<div id="footer"></div>
</body>
</html>