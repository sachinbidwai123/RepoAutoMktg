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
<div id="whiteBox">
<div id="boxMid">
        <div class="borLeft">
        <div class="borRight">
        	<div class="commonBox">
            
            <div id="sliderBox">
                <div class="mainBanner">
                <section class="section-white">
  <div class="container">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner carousel-innerInd">
        <div class="item active">
          <img src="images/bannerPic.png" width="609" height="243" alt="img" class="img-responsive">
        </div>
        <div class="item">
          <img src="images/bannerPic2.png" width="609" height="243" alt="img" class="img-responsive">
        </div>
        <div class="item">
          <img src="images/bannerPic3.png" width="609" height="243" alt="img" class="img-responsive">
        </div>
        <div class="item">
          <img src="images/bannerPic4.png" width="609" height="243" alt="img" class="img-responsive">
        </div>
        <div class="item">
          <img src="images/bannerPic5.png" width="609" height="243" alt="img" class="img-responsive">
        </div>
        <div class="item">
          <img src="images/bannerPic6.png" width="609" height="243" alt="img" class="img-responsive">
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon "><img src="images/arow1.png" width="21" height="29" alt="img"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon "><img src="images/arow2.png" width="21" height="29" alt="img"></span>
      </a>
    </div>

  </div>
</section>
                
                </div>
                
            </div>
            <div class="clear"></div>
            
            <div class="greyBox">
                <div class="headingMid">
                <span class="headTextLeft">SEARCH BY CATEGORY</span>
                </div>
                <p class="blText">Browse styles</p>
                
                
                
                
                
                
                
                
                
                
    	    <div class=""> 
                <div id="myCarousel" class="carousel slide">
                 
                <!-- Carousel items -->
                <div class="carousel-inner slideCar" style="border:0px none !important;">
                    
                <div class="item active">
                	<div class="row-fluid">
                	  <div class="span3 carSl">
                      <span>
                      <img src="images/car1.png" width="69" height="29" alt="img"><br> 
                      Van
                      </span>
                      <span>
                      <img src="images/car2.png" width="60" height="29" alt="img"> <br>
                      Hatchback
                      </span>
                      </div>
                	  <div class="span3 carSl">
                      <span>
                      <img src="images/car3.png" width="66" height="29" alt="img"> <br>
                      Chassis
                      </span>
                      <span>
                      <img src="images/car4.png" width="66" height="29" alt="img"> <br>
                      Pick up
                      </span>
                      </div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row-fluid">
                	  <div class="span3 carSl">
                      <span>
                      <img src="images/car5.png" width="66" height="29" alt="img"> <br>
                      Coupe
                      </span>
                      <span>
                      <img src="images/car6.png" width="62" height="29" alt="img"> <br>
                      wagon
                      </span>
                      </div>
                	  <div class="span3 carSl">
                      <span>
                      <img src="images/car1.png" width="69" height="29" alt="img"> <br>
                      Van
                      </span>
                      <span>
                      <img src="images/car2.png" width="60" height="29" alt="img"> <br>
                      Hatchback
                      </span>
                      </div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                
                </div><!--/carousel-inner-->
                 
                <a class="left carousel-control topMinus" href="#myCarousel" data-slide="prev">
                <img src="images/bl-arow1.png" width="21" height="29" alt="img"> </a>
                <a class="right carousel-control topMinus" href="#myCarousel" data-slide="next">
                <img src="images/bl-arow2.png" width="21" height="29" alt="img">
                </a>
                </div><!--/myCarousel-->
                 
            </div><!--/well-->   

                
                
                
                
                
                
                
                
            </div>
            
            <div class="greyBox"><div class="headingMid">
                <span class="headTextLeft">SEARCH BY Make and model</span>
                </div>
                
   <span class="fuel">Condition:</span>
   <div class="fuelLab">
     <ul class="radioMy">
       <li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" class="myRad">New</li>
    <li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" class="myRad">Pre owned</li>
    <li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" class="myRad">Used</li    
    ><li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" class="myRad">Repairable</li>
     </ul>
   </div>
                
                <div class="clear"></div>
                <div class="makeMode1">
                <label class="modLab">Make:</label>
                <div class="modDrop">
                <select name="" class="myDrop">
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
                <select name="" class="myDrop">
                     <option>Cl</option>
                     <option>CSx</option>
                     <option>ILX</option>
                     <option>Integra</option>
                     <option>Legend</option>
                 </select>
                </div>
                <div class="clear"></div>
                <label class="modLab">Transmission:</label>
                <div class="modDrop">
                <select name="" class="myDrop">
                     <option>Automatic</option>
                     <option>Manual</option>
                 </select>
                </div>
                <div class="clear"></div>
                </div>
               <div class="makeMode2">
                <label class="modLab1">Year:</label>
                <div class="modDrop1">
                <div class="yearBox">
   <select name="" class="myDrop">
     <option>2005</option>
     <option>2006</option>
   	 <option>2007</option>
     <option>2008</option>
     <option>2008</option>
   </select>
   </div>
   
   <div class="yearMid">
   To
   </div>
   
   <div class="yearBox">
   <select name="" class="myDrop">
     <option>2011</option>
     <option>2012</option>
   	 <option>2013</option>
     <option>2014</option>
     <option>2015</option>
   </select>
   </div>
                </div>
                <div class="clear"></div>
                <label class="modLab1">Price:</label>
                <div class="modDrop1">
                <select name="" class="myDrop">
                     <option>$34,999.00</option>
                     <option>$23,595.00</option>
                     <option>$50,555.00</option>
                     <option>$46,200.00</option>
                     <option>$49,695.00</option>
                 </select>
                </div>
                <div class="clear"></div>
                <label class="modLab1">Zip code:</label>
                <div class="modDrop1">
                <div>
    <input name="" type="text" class="mySearch">
   </div>
   
   <div class="bottSpac">
   <select name="" class="myDrop">
     <option>within</option>
     <option>100</option>
     <option>200</option>
   	 <option>300</option>
     <option>400</option>
     <option>500</option>
   </select>
   </div>
                </div>
                <div class="clear"></div>
                
                </div>
                <div class="clear"></div>
                <span class="fuel">Fuel type:</span>
   <div class="fuelLab bottMinus">
     <ul class="radioMy">
       <li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" class="myRad">Gasoline</li>
  <li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" class="myRad">Diesel</li>
  <li><input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2" class="myRad">Electric</li>
     </ul>
   </div>
         <div class="clear"></div> 
         <input name="" type="button" value="SEARCH" class=" myButt topSpace">
    <div class="clear"></div>  
        </div>
        
        <div class="greyBox"><div class="headingMid">
                <span class="headTextLeft">PRODUCT catalogue DISPLAY BOX</span>
                </div>
  <div class="tableBox"> 
  <table width="100%" border="0" cellspacing="0" class="tableBig">
  <thead class="tableHead">
  <tr>
    <td width="20%" align="left" valign="middle"> make  </td>
    <td width="20%" align="left" valign="middle"> model </td>
    <td width="20%" align="left" valign="middle"> year  </td>
    <td width="20%" align="left" valign="middle"> price </td>
    <td align="left" valign="middle"> color </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td align="left" valign="middle">Honda </td>
    <td align="left" valign="middle"> Jar</td>
    <td align="left" valign="middle">2013</td>
    <td align="left" valign="middle">$1400</td>
    <td align="left" valign="middle">White</td>
  </tr>
  <tr>
    <td align="left" valign="middle">BMW</td>
    <td align="left" valign="middle"> M5</td>
    <td align="left" valign="middle">2012</td>
    <td align="left" valign="middle">$1900</td>
    <td align="left" valign="middle">Black</td>
  </tr>
  <tr>
    <td align="left" valign="middle">Honda</td>
    <td align="left" valign="middle"> Jar </td>
    <td align="left" valign="middle">2014</td>
    <td align="left" valign="middle">$1600</td>
    <td align="left" valign="middle">White</td>
  </tr>
  </tbody>
</table>
</div>
        </div>
        
        <div class="greyBox"><div class="headingMid">
                <span class="headTextLeft">PRODUCT INVENTORY DISPLAY BY MAKE</span>
                </div>
                    <ul class="invent">
                       <li>Honda : &nbsp; 100</li>
                       <li>BMW  :   100 </li>
                       <li>Toyota : &nbsp; 100</li>
                       <li>Ford  : &nbsp; 100</li>
                    </ul>
                </div>
    	</div>
        </div>
        
        <div class="clear"></div>
    </div>
</div>
<div id="boxLeft">
      <? include('left.php')?>
</div>
<div id="boxRight">
            <div class="commonBox">
            <div class="heading">
            	<span class="headText">Find a car part</span>
            </div>
            <div class="lable">Search for auto parts:</div>
   <div class="lableData">
    <input name="" type="text" class="mySearch">
   </div>
    <input name="" type="button" value="SEARCH" class=" myButt">
    <div class="clear"></div>
    <p class="blueText">Don't know the name, let us help you ﬁnd what you are looking for:</p>
    
    <span class="lable">Car Make:</span>
   <div class="lableData">
   <select name="" class="myDrop">
     <option>Acura</option>
     <option>Alfa Romeo</option>
   	 <option>Aston martin</option>
     <option>Audi</option>
     <option>Bentley</option>
     <option>BMW</option>
   </select>
   </div> 
   
   <span class="lable">Car Model:</span>
   <div class="lableData">
   <select name="" class="myDrop">
    <option>Cl</option>
     <option>CSx</option>
   	 <option>ILX</option>
     <option>Integra</option>
     <option>Legend</option>
   </select>
   </div> 
   
   <span class="lable">Zip code:</span>
   <div class="lableData">
   <input name="" type="text" class="myDrop">
   </div> 
   
   <span class="lable"> within:</span>
   <div class="lableData">
   <select name="" class="myDrop">
     <option>100</option>
     <option>200</option>
   	 <option>300</option>
     <option>400</option>
     <option>500</option>
   </select>
   </div> 
   
   <span class="lable">Auto system:</span>
   <div class="lableData">
   <select name="" class="myDrop">
     <option>Ignition system</option>
     <option>signaling system</option>
   	 <option>Starting system</option>
     <option>Sensors system</option>
   </select>
   </div> 
   
   <span class="lable">Auto parts:</span>
   <div class="lableData">
   <select name="" class="myDrop">
     <option>Bonnet/hood</option>
     <option>Bumper</option>
     <option>Cowl screen</option>
     <option>Decklid</option>
     <option>Rims</option>
     <option>Trim package</option>
     <option>Grille</option>
     <option>Pillar</option>
     
   </select>
   </div> 
   <div class="clear"></div>
   <input name="" type="button" value="SEARCH" class=" myButt">
   <div class="bannerBox">
   	 <img src="images/banner.png" width="244" height="205" alt="banner"></div>
          </div>
        </div>	
<div class="clear"></div>
</div>
</div>
</div>
<div id="state">
<? include('states.php'); ?>
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

</html>