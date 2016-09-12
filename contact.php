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
<p class="SubHead">Contact Us</p>
<div id="whiteBoxLogin1">
<div id="logLeft">
<div class="commonBoxLog">
<p class="blueText1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<p class="contText">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<P class="contInfo">
Telephone : 121 555 555<br>
Fax : 121 555 555<br>
E-mail : <a href="mailto:info@cardoctors.com" class="infoLink">info@cardoctors.com</a>
</P>
</div>
</div>
<div id="logRight">
	<div class="commonBoxLog">
	<label class="lableMy">First name:</label>
    <input type="text" id="" name="" placeholder="First name" class="mySearchLog">
    <div class="clear"></div>
    <label class="lableMy">Last name:</label>
    <input type="text" id="" name="" placeholder="Last name" class="mySearchLog">
    <div class="clear"></div>
    <label class="lableMy">E-mail</label>
    <input type="emial" id="" name="" placeholder="E-mail" class="mySearchLog">
    <div class="clear"></div>
    <label class="lableMy">Phone #</label>
    <input type="text" id="" name="" placeholder="Phone#" class="mySearchLog">
    <div class="clear"></div>
    <label class="lableMy">Comment</label>
    <textarea name="" cols="" rows="" class="mySearchLog"></textarea>
    <div class="clear"></div>
    <input class=" myButt leftSpace" type="button" value="SUBMIT" name="" onclick="location.href='index.php';">
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