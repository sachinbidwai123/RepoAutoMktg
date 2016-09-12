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
<p class="SubHead">Lease a work car</p>
<div id="whiteCupn">
  <div id="boxLeftCup">
    <? include('left-lease.php')?>
  </div>
  <div id="boxRightCup" class="bgNone">
    <div class="couponBox">
      <div class="commonBoxLog">
      
      <div class="ctlogHead">Welcome back, please enter the make and model you are interested in</div>
      <div class="greyBox">
      <div class="headingMid">
                <span class="headTextLeft">SEARCH BY Make and model</span>
              </div>
              
              <ul class="radioMy">
  <li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" class="myRad">Lease new cars</li>
  <li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" class="myRad">
  Lease pre-owned/used cars</li>
              </ul>

   <div class="clear"></div>
                <div class="makeMode1 boxSpes">
                <label class="modLab">Make:</label>
                <div class="modDrop">
                <select class="myDrop" name="">
                      <option>Acura</option>
                      <option>Alfa Romeo</option>
                      <option>Aston martin</option>
                      <option>Audi</option>
                      <option>Bentley</option>
                      <option>BMW</option>
                 </select>
                </div>
                <div class="clear"></div>
                <label class="modLab">Model:</label>
                <div class="modDrop">
                <select class="myDrop" name="">
                      <option>Acura</option>
                      <option>Alfa Romeo</option>
                      <option>Aston martin</option>
                      <option>Audi</option>
                      <option>Bentley</option>
                      <option>BMW</option>
                 </select>
                </div>
                <div class="clear"></div>
                </div>
               <div class="makeMode1 boxSpes">
                <label class="modLab">Enter Zip code:</label>
                <div class="modDrop">
<input name="" type="text" class="myDrop">
                </div>
                <div class="clear"></div>
                <label class="modLab">State:</label>
                <div class="modDrop">
                <select class="myDrop" name="">
                     <option>Alaska</option>
                     <option>California</option>
                     <option>Florida</option>
                     <option>Georgia</option>
                     <option>Indiana</option>
                 </select>
                </div>
                <div class="clear"></div>
              </div>
                <div class="clear"></div>
                <span class="fuel">Search by:</span>
   <div class="fuelLab bottMinus">
     <ul class="radioMy">
       <li><input type="checkbox" class="myRad" value="" name="">Make</li>
       <li><input type="checkbox" class="myRad" value="" name="">Type</li>
       <li><input type="checkbox" class="myRad" value="" name="">Year</li>
       <li><input type="checkbox" class="myRad" value="" name="">Price</li>
     </ul>
   </div> <div class="clear"></div> 
         <input type="button" class=" myButt topSpace" value="SEARCH" name="">
    
       <div>
   <p class="myBlueText">Still can't find the right car for you to lease. Hire our car sales associate.</p>
         <div class="clear"></div>
         </div> 
        </div>
      
      <div class="makeModcoup">
    	<div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
    <div class="clear"></div>
    </div>
    <div class="makeModcoup">
    	<div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
    <div class="clear"></div>
    </div>
    <div class="makeModcoup">
    	<div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda Honda civic  2013</p>
            <p class="blueText1">$160/month</p>
            <p class="blk"> Millage : 32,000</p>
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>

            <div class="">
    Bloomfield Michigan <br>
	Johnson autos  <br>
	Stock number: 00113

     <div class="clear"></div>
   </div>
<p><a href="car-details.php">view more details </a> </p>
<p><a href="#" class="buyNow">Lease to buy </a> </p>
            <div class="clear"></div></div>
        </div>
    <div class="clear"></div>
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