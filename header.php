<?php

include 'config.php';

session_start();



?>
<style>
 .navbar {
  min-height: 80px;
}

.navbar-brand {
  padding: 0 15px;
  height: 80px;
  line-height: 80px;
}

.navbar-toggle {
  /* (80px - button height 34px) / 2 = 23px */
  margin-top: 23px;
  padding: 9px 10px !important;
}

@media (min-width: 768px) {
  .navbar-nav > li > a {
    /* (80px - line-height of 27px) / 2 = 26.5px */
    padding-top: 26.5px;
    padding-bottom: 26.5px;
    line-height: 27px;
  }
  
  p{
	margin-right: 5px;
  }
}

</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><img src="brand.png" style="height:100%;display:inline-block;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="market.php">Market Place</a></li>
		<li><a href="help.php">Help</a></li>
		<li><a href="about.php">About</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
		  <p class="text-primary">Welcome<br/> <?php echo $_SESSION['username'];?></p>
        </div>
		<!--<button type="button" formtarget="http://google.com" class="btn btn-primary navbar-btn">Sign in</button>-->
		<a href="signout.php" class="btn btn-primary navbar-btn">Sign Out</a>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>