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
<p class="SubHead">Newly listed</p>
<div id="whiteCupn">
  <div id="boxLeftCup">
    <? include('left.php')?>
  </div>
  <div id="boxRightCup" class="bgNone">
    <div class="couponBox">
      <div class="commonBoxLog">
        <p class="couponHead">Be smart, Purchase your car with a coupon and save thousands of dollars
          Learn how it works </p>
        <div class="couponCotelog">
          <div class="ctlogHead"> Browse newly listed cars for sale</div>
          <div class="makeModcoup">
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="makeModcoup">
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="makeModcoup">
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="newListed">
              <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <p class="blueText1">Save $1000.00</p>
                <div class="cupCarPic"> <a href="car-details.php"><img src="images/car1.jpg" alt="car" border="0"></a> </div>
                <p class="cupVal"><a href="car-details.php">Coupon price: $50.00</a></p>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
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