<?php
ob_start();
session_start();
include("includes/classes/db.php");
include("includes/comman_function.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to Auto Marketing.com</title>
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="css/nav.css">
<link href="css/site.min.css"  rel="stylesheet" type="text/css"/>
<link href="css/custom.css" rel="stylesheet">
<script src="js/site.min.js"></script>
</head>
<body>
<? include('header.php');?>
<div id="body" class="logBody">
<div class="contain">
<p class="SubHead">Private user dashboard </p>
<div id="whiteBoxLogin1">
<div class="invest">
<ul class="dashBox">
	<li>
    	<div class="dashInner">
        	<p class="dashNumb"><a href="profile.php">01</a></p>
            <span class="dashData">
            <p class="dashTitle"><a href="profile.php">Profile</a></p>
View & updates account details
           <a href="profile.php">READ MORE...</a>
            </span>
        </div>
    </li>
    <li>
    	<div class="dashInner">
        	<p class="dashNumb"><a href="change-password.php">02 </a></p>
            <span class="dashData">
            <p class="dashTitle"><a href="change-password.php">Change Password </a> </p>
Change self account password
           <a href="change-password.php">READ MORE...</a>
            </span>
        </div>
    </li>
    
<li>
    	<div class="dashInner">
        	<p class="dashNumb"><a href="my-order.php">03</a></p>
            <span class="dashData">
            <p class="dashTitle"><a href="my-order.php">My Orders </a> </p>
View & manage orders
           <a href="my-order.php">READ MORE...</a>
            </span>
        </div>
    </li>
    </ul>
    
    <ul class="dashBox">
	<li>
    	<div class="dashInner">
        	<p class="dashNumb"><a href="mybids.php">04</a></p>
            <span class="dashData">
            <p class="dashTitle"><a href="mybids.php">My Bids</a> </p>
View & manage all bids
           <a href="mybids.php">READ MORE...</a>
            </span>
        </div>
    </li>
    <li>
    	<div class="dashInner">
        	<p class="dashNumb"><a href="autoinvst-dashboard.php">05</a></p>
            <span class="dashData">
            <p class="dashTitle"><a href="autoinvst-dashboard.php">Auto Investment </a></p>
View & manage auto investment details 
           <a href="autoinvst-dashboard.php">READ MORE...</a>
            </span>
        </div>
    </li>
    
<li>
    	<div class="dashInner">
        	<p class="dashNumb"><a href="auto-repair-dashboard.php">06</a></p>
            <span class="dashData">
            <p class="dashTitle"> <a href="auto-repair-dashboard.php">Auto repair Club </a></p>
View & manage auto repair club requests
           <a href="auto-repair-dashboard.php">READ MORE...</a>
            </span>
        </div>
    </li>
    </ul>
    <ul class="dashBox">
	<li class="lastDashBox">
    	<div class="dashInner">
        	<p class="dashNumb"><a href="message.php">07</a></p>
            <span class="dashData dashDataLast">
            <p class="dashTitle"><a href="message.php">Messages </a> </p>
View & manage all messages
<a href="message.php">READ MORE...</a>
            </span>
        </div>
    </li>
    </ul>
</div>
</div>
</div>
</div>

<footer>
<? include('bottom.php');?>
</footer>
</body>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	$(document).ready(function() {
    $('#myCarousel').carousel({
	    interval: 10000
	})
});
	</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    	$(document).ready(function(){
			$('#showDrop').click(function(event){
				event.stopPropagation();
				$(".dropBox").show();
			});
			$(document).click(function(){
				$(".dropBox").hide();	
			});
		});
    </script>
</html>