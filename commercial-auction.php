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
<p class="SubHead">Commercial trucks on auction </p>
<div id="whiteCupn">
  <div id="boxLeftCup">
    <div class="commonBox dottedBor">
      <div class="heading"> <span class="headText">Categories</span> </div>
      <div class="lableData">
        <ul class="auctionPanel">
          <li class="mycategory">
          <a href="car-truck-auction.php" class="ctgryLonk"> Cars or truck on auction </a></li>
          <li class="mycategory">
          <a href="commercial-auction.php" class="ctgryLonk"> Commercial trucks on auction   </a></li>
          <li class="mycategory">
          <a href="motorcycle-auction.php" class="ctgryLonk"> Motorcycles  on  auction  </a></li>
          <li class="mycategory">
          <a href="car-part-auction.php" class="ctgryLonk"> Car parts on auction  </a></li>
        </ul>
      </div>     
      <span class="lable">Make: </span>
      <div class="lableData">
        <select name="select" class="myDrop">
          <option>Acura</option>
          <option>Alfa Romeo</option>
          <option>Aston martin</option>
          <option>Audi</option>
          <option>Bentley</option>
          <option>BMW</option>
        </select>
      </div>
      <span class="lable">Model: </span>
      <div class="lableData">
        <select name="select" class="myDrop">
          <option>Cl</option>
          <option>CSx</option>
          <option>ILX</option>
          <option>Integra</option>
          <option>Legend</option>
        </select>
      </div>
      <input name="input" type="button" value="SEARCH" class=" myButt">
      <div class="clear"></div>
     <span class="autctionLab">BODY TYPE</span>
      <div class="lableData">
        <div class="yearBox">
          <select name="select" class="myDrop">
            <option>convertible</option>
            <option>coupe</option>
            <option>hatchback</option>
            <option>sedan</option>
            <option>suv</option>
            <option>wagon</option>
          </select>
        </div>
      </div>
      <input name="input" type="button" value="SEARCH" class=" myButt">
      <div class="clear"></div>
      
<span class="autctionLab">TRANSMISSION</span>
<div class="lableData">
    <ul class="auctionPanel">
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">Automatic</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">Manual</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_1" value="radio" name="RadioGroup1">Not specified</li>
    </ul>
</div>
      <span class="lable">Zip code</span>
      <div class="lableData">
        <input name="" type="text"  class="mySearch">
      </div>
      <span class="lable">Within</span>
      <div class="lableData">
        <input name="" type="text"  class="mySearch">
      </div>
      <input name="input" type="button" value="SEARCH" class=" myButt">
      <div class="clear"></div>
      
<span class="autctionLab">CONDITION</span>
<div class="lableData">
    <ul class="auctionPanel">
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">New</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">pre-owned</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_1" value="radio" name="RadioGroup1">Used</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_1" value="radio" name="RadioGroup1">
    Repairable</li>
    </ul>
   </div>  
<input name="input" type="button" value="SEARCH" class=" myButt">
<div class="clear"></div>   
   
<span class="autctionLab">OPEN FOR BIDDING</span>
<div class="lableData">
    <ul class="auctionPanel">
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">On going Auction</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">Open soon</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_1" value="radio" name="RadioGroup1">Ending soon</li>
    </ul>
</div>  
         
<span class="autctionLab">COMMERCIA</span>
<div class="lableData">
    <ul class="auctionPanel">
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">Tractores</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">Trailers</li>
    <li class="condition"><input type="radio" class="myRad" id="RadioGroup1_1" value="radio" name="RadioGroup1">Constructions equipment</li>
    </ul>
   </div>

 <div class="clear"></div>
      <input name="input" type="button" value="SEARCH" class=" myButt">
      <div class="clear"></div>
      <br>
    </div>
  </div>
  <div id="boxRightCup" class="bgNone">
    <div class="couponBox">
          <p class="couponHead">  Browse commercial trucks on Auction  </p>
      <div class="commonBoxLog">
      <div>
       <div class="auctBox">
            <span class="lable">Manufacture: </span>
      <div class="lableData">
        <select name="select" class="myDrop">
          <option>Acura</option>
          <option>Alfa Romeo</option>
          <option>Aston martin</option>
          <option>Audi</option>
          <option>Bentley</option>
          <option>BMW</option>
        </select>
      </div>
      <span class="lable">Trailer: </span>
      <div class="lableData">
        <select name="select" class="myDrop">
          <option>Cl</option>
          <option>CSx</option>
          <option>ILX</option>
          <option>Integra</option>
          <option>Legend</option>
        </select>
          </div> 
       </div>
       <div class="auctBoxMid">
            <span class="lable">Make: </span>
      <div class="lableData">
        <select name="select" class="myDrop">
          <option>Acura</option>
          <option>Alfa Romeo</option>
          <option>Aston martin</option>
          <option>Audi</option>
          <option>Bentley</option>
          <option>BMW</option>
        </select>
      </div>
      <span class="lable">Model: </span>
      <div class="lableData">
        <select name="select" class="myDrop">
          <option>Cl</option>
          <option>CSx</option>
          <option>ILX</option>
          <option>Integra</option>
          <option>Legend</option>
        </select>
          </div>
       </div>
       <div class="auctBox">
            <span class="lable">year from </span>
      <div class="lableData">
        <select name="select" class="myDrop">
          <option>2014</option>
          <option>2013</option>
          <option>2012</option>
          <option>2011</option>
          <option>2000</option>
          <option>2009</option>
        </select>
      </div>
      <span class="lable">to </span>
      <div class="lableData">
        <select name="select" class="myDrop">
          <option>2014</option>
          <option>2013</option>
          <option>2012</option>
          <option>2011</option>
          <option>2000</option>
          <option>2009</option>
        </select>
          </div>
       </div>
       <div class="clear"></div>
       
       <ul class="auctionPanel">
    <li class="auctionRadio"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">Heavy duty</li>
    <li class="auctionRadio"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">Medium duty</li>
    </ul>
    
    <div class="clear"></div>
       <ul class="auctionPanel">
    <li class="auctionRadio"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">Auctions only</li>
    <li class="auctionRadio"><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">All listings</li>
    </ul>
    <input class=" myButt" type="button" value="SEARCH" name="input">
    </div>
    <div class="couponBox">
    <div class="auctBox">
    	 <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid: $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
    </div>
    <div class="auctBoxMid">        
        <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid : $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
    </div>
    <div class="auctBox">
    	 <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid : $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
    </div>
    <div class="clear"></div>
    </div>
    <div class="couponBox">
    <div class="auctBox">
    	 <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid: $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
    </div>
    <div class="auctBoxMid">        
        <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid : $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
    </div>
    <div class="auctBox">
    	 <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid : $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
    </div>
    <div class="clear"></div>
    </div>
    <div class="couponBox">
    <div class="auctBox">
    	 <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid: $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
    </div>
    <div class="auctBoxMid">        
        <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid : $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
    </div>
    <div class="auctBox">
    	 <div class="detailBoxIn">
                <p>Honda pilot 2006 </p>
                <div class="cupCarPic"> <a href="auction-details.php"><img border="0" alt="car" src="images/truck.jpg"></a> </div>
                <p class="cupVal"><a href="auction-details.php">    Auction opens on 03/20/15</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Opening bid: $100.00</a></p>
                <p class="salwPrice"><a href="auction-details.php"> Current bid : $100.00</a></p>
                <p class="viewNo"><a href="auction-details.php">    Auction ends on 03/30/15</a></p>
              </div>
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