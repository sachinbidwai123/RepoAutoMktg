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
<p class="SubHead">investors log in</p>
<div id="whiteBoxLogin">
<div id="logInvest">
<div class="commonBoxLog">
    <div class="heading">
    <span class="headText">investors User</span>
    </div>
    <label class="lableMy">Username:</label>
    <input type="text" id="" name="" placeholder="Username" class="mySearchLog">
    <div class="clear"></div>
    <label class="lableMy">Password:</label>
    <input type="password" name="" id="" class="mySearchLog" placeholder="Password">
    <div class="clear"></div>
    <p><a class="forgot" href="remember-password.php">Forgot your password?</a></p>
    <input class=" myButt leftSpace" type="button" value="LOGIN" name="" onclick="location.href='index.php';">
    <div class="clear"></div>
    <br>
    <label class="lableMy"></label>
    <form name="form1" method="post" action="">
<input type="radio" name="RadioGroup1" value="sssssss" id="RadioGroup1_0">
          Private investment account
          <br>
          <input type="radio" name="RadioGroup1" value="dddddddddd" id="RadioGroup1_1">
          Business investment account
    </form>
    <div class="clear"></div>
    <input type="button" onClick="#" name="input" value="CONTINUE" class=" myButt leftSpace">
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