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
<script src="js/bootstrap.js"></script>
</head>
<body>
<? include('header.php');?>
<div id="body">
<div class="contain">
<p class="SubHead">My bids
  <span class="welcomeName">Welcome Nilesh B.</span>
  <span class="back"><a href="mybids.php"><span>«</span> Back </a></span>
</p>
<div id="whiteCupn">
<div class="couponBox">
<div class="commonBoxLog">
<p class="couponHead">Purchase this car with Bids</p>
	<div class="couponCotelog">   
    <div class="detailBox">
    <div class="deataiCol1">
    	<div class="innBox">
        <div class="clear"></div>
        <p class="seller">Seller name :<span> John Doe</span></p>
        <div id="mainBox">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
<div class="active item" data-slide-number="0"> <img src="images/big-car1.jpg" alt="img"> </div>
<div class="item" data-slide-number="1">        <img src="images/big-car2.jpg" alt="img"> </div>
<div class="item" data-slide-number="2">        <img src="images/big-car3.jpg" alt="img"> </div> 
<div class="item" data-slide-number="3">        <img src="images/big-car4.jpg" alt="img"> </div>
<div class="item" data-slide-number="4">        <img src="images/big-car5.jpg" alt="img"> </div>

                                  </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="arrowLeft"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="arrowRight"></span>                                       
                                    </a>                                
                              </div>
                            </div>

                            
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="thumImg">
<a class="thumbnail" id="carousel-selector-0"> <img src="images/s-car1.jpg" alt="img"></a>
                            </li>

                            <li class="thumImg">
<a class="thumbnail" id="carousel-selector-1"> <img src="images/s-car2.jpg" alt="img"></a>
                            </li>

                            <li class="thumImg">
<a class="thumbnail" id="carousel-selector-2"> <img src="images/s-car3.jpg" alt="img"></a>
                            </li>

                            <li class="thumImg">
<a class="thumbnail" id="carousel-selector-3"> <img src="images/s-car4.jpg" alt="img"></a>
                            </li>

                            <li class="thumImg">
<a class="thumbnail" id="carousel-selector-4"> <img src="images/s-car5.jpg" alt="img"></a>
                            </li>
</ul>                 
                </div>
        </div>
        </div>
        </div>
    </div>
    <div class="deataiCol2">
    <div class="innBox">
    <p class="yearBox">
        <span><em>Make: </em>Honda</span>
        </p> 
        
        <p class="yearBox">
        <span><em>Model: </em>Brio</span>
        </p>
        
        <p class="yearBox">
        <span><em>Stock #: </em>23</span>
        </p>
                
        <p class="yearBox">
        <span><em>Year: </em>2013</span>
        </p>
        
        <p class="yearBox">
        <span><em>Car location: </em>Florida</span>
        </p>
        
        <p class="yearBox">
        <span><em>Millage: </em>934000 Km</span>
        </p>
        
        <p class="yearBox">
        <span><em>Transmission: </em> Automatic</span>
        </p>
        
        <p class="yearBox">
        <span><em>Features: </em>Value here</span>
        </p>
        <p class="yearBox">
        <span><em>Start your engine: </em>Electric</span>
        </p>
        
        <p class="yearBox bidamnt">
        <span><em>Bid amount: </em>$17000</span>
        </p>
        <p class="yearBox bidamnt">
        <span><em>Bid status: </em>Open</span>
        </p>
        <div class="clear"></div>

     </div></div>
    <!--<div class="deataiCol3">
    <div class="innBox">
        <p class="yearBox">
        <span><em>Coupon Value: </em>$1000.00</span>
        </p>
        
        <p class="yearBox">
        <span><em>Coupon price: </em>$300</span>
        </p>
        
        <p class="yearBox">
        <span><em>Car asking price: </em>$12,000.00</span>
        </p>
        
        <p class="yearBox">
        <span><em>Car price with coupon: </em>$11,000.00</span>
        </p>
        <div class="clear"></div>
        </div>
        
    </div> -->
    <div class="clear"></div>
    </div></div>
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
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
    </script>
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