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
<div id="body">
<div class="contain">
<p class="SubHead">Auto Investment
  <span class="welcomeName">Welcome Nilesh B.</span>
  <span class="back"><a href="dashboard-pvt.php"><span>«</span> Back </a></span>
</p>
<div id="whiteBoxLogin1">
<div class="investBox">
<div class="heading">
<span class="headText">Heading will be here! </span>
</div>
<div class="clear"></div>
<p class="centerText">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived 
</p>
<ul class="invest">
	<li class="planDash">
    	<div class="investMainBox">
<div class="heading"><span class="headText">Plan-02</span></div>
<p class="blk1">Lorem Ipsum is simply dummy text of the Lorem Ipsum is simply dummy</p>
<p class="blueText1">Lorem Ip-simply dummy-the Lorem</p>
<ul class="planBullet">
	<li> Lorem Ipsum is simply </li>
    <li>Dummy text of the printing and</li>
    <li>typesetting industry</li>
    <li>Standard dummy text</li>
    <li>Ever since the 1500s</li>
    <li>unknown printer took</li>
    <li>Galley of type</li>
    <li>Scrambled it to make</li>

</ul>
<div class="clear"></div> 
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