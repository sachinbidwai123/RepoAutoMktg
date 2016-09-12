<?php
ob_start();
session_start();
include("includes/classes/db.php");
include("includes/comman_function.php");
?><!DOCTYPE HTML>
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
<p class="SubHead">Auto repair Request
  <span class="welcomeName">Welcome Nilesh B.</span>
  <span class="back"><a href="auto-repair-dashboard.php"><span>&laquo;</span> Back </a></span>
</p>
<div id="whiteBoxLogin1">
  <div id="privAcc">
  <div class="heading">
<span class="headText">Car Information</span>
</div>
<div class="clear"></div>
    <div class="commonBoxLog">
    <div class="pvtOutBox">
    <label class="lableMy">Make Name:</label>
    <select class="mySearchLog" name="">
     <option>Acura</option>
     <option>Alfa Romeo</option>
   	 <option>Aston martin</option>
     <option>Audi</option>
     <option>Bentley</option>
     <option>BMW</option>
   </select>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Model Name:</label>
    <select class="mySearchLog" name="">
     <option>Cl</option>
     <option>CSx</option>
   	 <option>ILX</option>
     <option>Integra</option>
     <option>Legend</option>
   </select>
    <div class="clear"></div>
    </div>
   
    <div class="pvtOutBox">
    <label class="lableMy">Vehicle Type:</label>
    <select class="mySearchLog" name="">
     <option>value here</option>
     <option>value here</option>
   	 <option>value here</option>
     <option>value here</option>
   </select>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Year:</label>
    <select class="mySearchLog" name="">
     <option>value here</option>
     <option>value here</option>
   	 <option>value here</option>
     <option>value here</option>
   </select>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy"> Trim:</label>
    <select class="mySearchLog" name="">
     <option>value here</option>
     <option>value here</option>
   	 <option>value here</option>
     <option>value here</option>
   </select>
    <div class="clear"></div>
    </div>
   
    <div class="pvtOutBox">
    <label class="lableMy"> Color Exterior:</label>
    <select class="mySearchLog" name="">
     <option>value here</option>
     <option>value here</option>
   	 <option>value here</option>
     <option>value here</option>
   </select>
    <div class="clear"></div>
    </div>
 
    <div class="pvtOutBox">
    <label class="lableMy"> Miles:</label>
    <input type="text" placeholder="Miles" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
  
    <div class="pvtOutBox">
    <label class="lableMy">Color Interior:</label>
    <select class="mySearchLog" name="">
     <option>value here</option>
     <option>value here</option>
   	 <option>value here</option>
     <option>value here</option>
   </select>
    <div class="clear"></div>
    </div>
       
    <div class="pvtOutBox">
    <label class="lableMy">Current Damage/Condition:</label>
    <input type="text" placeholder="Current Damage/Condition" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
   <input type="button" onclick="location.href='#';" name="" value="ADD" class=" myButt acc">
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