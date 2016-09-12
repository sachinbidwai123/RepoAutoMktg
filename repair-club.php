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
<p class="SubHead">Auto repair club</p>
<div id="whiteBoxLogin1">
  <div id="privAcc">
  <div class="heading">
<span class="headText">Lorem Ipsum is simply dummy text of the printing</span>
</div>
<div class="clear"></div>
<p class="centerText">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived 
</p>
    <div class="commonBoxLog">
    <div class="pvtOutBox">
    <label class="lableMy">First Name:</label>
    <input type="text" class="mySearchLog" placeholder="First name" name="" id="">
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Last Name:</label>
    <input type="text" class="mySearchLog" placeholder="Last name" name="" id="">
    <div class="clear"></div>
    </div>
   
    <div class="pvtOutBox">
    <label class="lableMy">Home address:</label>
    <input type="text" class="mySearchLog" placeholder="Home address" name="" id="">
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">City:</label>
    <input type="text" placeholder="City" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy"> State:</label>
    <input type="text" placeholder="State" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
   
    <div class="pvtOutBox">
    <label class="lableMy"> Zip code:</label>
    <input type="text" placeholder="Zip code" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
 
    <div class="pvtOutBox">
    <label class="lableMy"> Phone number:</label>
    <input type="text" placeholder=" Phone number" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
  
    <div class="pvtOutBox">
    <label class="lableMy">Email address:</label>
    <input type="email" placeholder="Email address" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
       
    <div class="pvtOutBox">
    <label class="lableMy">Username:</label>
    <input type="text" placeholder="Username" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
    
    <div class="pvtOutBox">
    <label class="lableMy">Password:</label>
    <input type="password" placeholder="Password" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Reenter password:</label>
    <input type="password" placeholder="Reenter password " class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
     <div class="pvtOutBox">
     <div class="captureImg"><img src="images/capture.png" alt="img"></div>
     <div class="captureFild">
     <input id="" class="mySearchLog capTextBox" type="email" name="" placeholder="">
     </div>
     <div class="clear"></div>
     </div>

    <div class="clear"></div>
    <input type="button" onclick="location.href='#';" name="" value="Creat an account" class=" myButt acc">
    </div>
</div>
<div class="clear"></div>
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