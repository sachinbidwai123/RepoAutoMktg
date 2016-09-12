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
<p class="SubHead">Make money</p>
<div id="whiteBoxLogin1">
<div class="mkMonye">
<div class="commonBoxLog">
<p class="moneyBlk-Text">Over 60 million cars are sold each year in America.Millions of new and used cars are
exported to over 150 countries around the world each year. Global auto industry
generate billions of dollars in annual sales. We would like to give you the opportunity to
earn some of that money..</p>
<p class="couponHeadMk">Are you ﬁred up? We hope so.Here is how you can make money with us: </p>
<p class="contText">
<div class="headingMid">
<span class="moneyHead">SELLING CARS</span>
</div>
Make money by selling cars on Car doctors. We have design an online auto marketing
platform that allow car sellers to sell their car to ﬁnancial able and willing buyers. We
have marketing tools that allow cars sellers to sell their  cars faster and at the same
time gives car buyer the chance to learn of the car conditions. <a href="#">Yes I want to sell a car </a>
</p>

<p class="contText">
<div class="headingMid">
<span class="moneyHead">SELLING CARS PARTS</span>
</div>
Make money by selling car parts on car doctors. Use car parts sales generate millions
of dollars each year.   Yes I want to sell car parts
</p>

<p class="contText">
<div class="headingMid">
<span class="moneyHead">DRIVING TRAINING INSTRUCTOR</span>
</div>
Make money by becoming a car doctors driving training  instructor.  With thousands of
people around your neighborhood learning how to drive for the ﬁst time,there is a high
demand for a driving instructor. Make money using your current car by becoming a
certiﬁed car doctor driving  Training instructor.  <a href="#">Yes I want to be a driving instructor</a>
</p>

<p class="contText">
<div class="headingMid">
<span class="moneyHead">FOR LEASE</span>
</div>
Generate steady monthly income by leasing your car out using car doctors.  Do you
have a car sitting around or a car you don't drive quite often? If you do, would you like to
lease it out for a year or more.   Car doctors gives you the opportunity to convert your
liability into a cash generating asset without sacriﬁcing ownership. <a href="#"> Yes I want to lease
out my car</a>
</p>

<p class="contText">
<div class="headingMid">
<span class="moneyHead">FINANCING CARS</span>
</div>
Make money by ﬁnancing cars using car doctors auto investment trust.Six in every ten
cars are ﬁnanced. As much as 98% of new cars sold annually are ﬁnanced, 80% of
used and new of commercial vehicles  on the road today are ﬁnanced. Auto ﬁnancing
generates for banks and ﬁnancial institution millions of dollars every year. We design an
auto investment trust, an investment platform that  allow small investors to combine
their ﬁnancial resources for auto ﬁnancing services.  Investors can invest as little as
$10.00. Financial gains generated are distributed to investors as their monthly
investment distribution income. Our Auto investment trust gives small investors the
opportunity to secure solid ﬁnancial future through capital gain.  <a href="#">Yes I want to invest
in Auto investment trust </a> </p>

<p class="contText">
<div class="headingMid">
<span class="moneyHead">SHIPPING CARS</span>
</div>
Make money by shipping cars. Thanks to Internet, people are buying cars 100s of miles
away from home.  Auto transport carries can register with us and make money by
providing trusted and reliable auto transportation service to car doctors car sellers and
their customer. <a href="#"> Yes I am an Auto transport carrier.</a></p>

<p class="contText">
<div class="headingMid">
<span class="moneyHead">AUTO REPAIR CLUB(Make money by saving money)
</span>
</div>
We believe in make money by saving saving money, our Auto repair club is design just
for that. Save money on your car repairs and maintenance. By joining the club and
purchasing  repair coverage for your car. You save  money on car repairs should your
covered car suffer a break down. Car doctors auto repair club will pay your mechanic for
labour and parts charged for repairing your  covered vehicle. <a href="#">Yes I want to join the club </a>
</p>
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