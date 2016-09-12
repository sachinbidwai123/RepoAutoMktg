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
<p class="SubHead">commercial vehicle parts</p>
<div id="whiteCupn">
  <div id="boxLeftCup">
    <? include('left-parts.php')?>
  </div>
  <div id="boxRightCup" class="bgNone">
    <div class="couponBox">
      <div class="commonBoxLog">
      
      <div class="ctlogHead">Welcome back, please enter the make and model you are interested in</div>
      <div class="greyBox">
      <div class="headingMid">
      <span class="headTextLeft">SEARCH Car or truck part</span>
      </div>
  <ul class="radioMy">
       <li><input type="radio" class="myRad" id="RadioGroup1_0" value="radio" name="RadioGroup1">
       New car parts </li>
       <li><input type="radio" class="myRad" id="RadioGroup1_1" value="radio" name="RadioGroup1">
       Used car parts </li>
  </ul>
<div class="clear"></div>
                <div class="makeMode1 boxSpes">
                <label class="modLab">Part name:</label>
                <div class="modDrop">
                <input name="" type="text" class="myDrop" placeholder="Enter the part name" >
                </div>
                <div class="clear"></div>
                <p class="noteMy">E.g. Honda pilot 2004 radiator </p>
                <div class="clear"></div>
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
                      <option>CI</option>
                      <option>CSx</option>
                      <option>ILx</option>
                      <option>Integra</option>
                      <option>Legend</option>
                 </select>
                </div>
                <div class="clear"></div>
                </div>
               <div class="makeMode1 boxSpes">
                <label class="modLab">Enter Zipcode:</label>
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
                <div class="clear">
                  <div class="clear"></div>
            </div>
                <span class="fuel">Search by:</span>
   <div class="fuelLab bottMinus">
     <ul class="radioMy">
       <li><input type="checkbox" class="myRad" value="" name="">Make</li>
       <li><input type="checkbox" class="myRad" value="" name="">Model</li>
       <li><input type="checkbox" class="myRad" value="" name="">Year</li>
     </ul>
   </div>
   <br><br>
         <div class="clear"></div>
         <div class="makeMode1 boxSpes">
                <label class="modLab">Body Parts:</label>
                <div class="modDrop">
                <select class="myDrop" name="">
                      <option>Front end Assembly(nose)</option>
                      <option>Front bumper Assembly</option>
                      <option>Grille</option>
                      <option>Radiator</option>
                      <option>Condenser</option>
                 </select>
                </div>
                <div class="clear"></div>
                <label class="modLab">Mechanical Parts:</label>
                <div class="modDrop">
                <select class="myDrop" name="">
                      <option>Cylinder head</option>
                      <option>Engine block</option>
                      <option>A/C compressor</option>
                      <option>Alternator</option>
                      <option>Power steering pump</option>
                 </select>
                </div>
                <div class="clear"></div>
                </div>
                <div class="makeMode1 boxSpes">
                <label class="modLab">Interior Parts:</label>
                <div class="modDrop">
                <select class="myDrop" name="">
                      <option>Audiovisual(A/V)</option>
                      <option>Steering Column</option>
                      <option>Interior complete</option>
                      <option>Seat(front)</option>
                      <option>Seat( back)</option>
                 </select>
                </div>
                <div class="clear"></div>
                <label class="modLab">Auto system:</label>
                <div class="modDrop">
                <select class="myDrop" name="">
                      <option>Air intake parts</option>
                      <option>Emission Control Parts</option>
                      <option>Fuel Delivery Parts</option>
                      <option>Engine Cooling Parts</option>
                      <option>Ignition Parts</option>
                      <option>Brake Parts</option>
                 </select>
                </div>
                <div class="clear"></div>
                </div>
                 <div class="clear"></div>
         <input type="button" class=" myButt topSpace" value="SEARCH" name="">
    <div class="clear"></div>  
        </div>
      
      <div class="makeModcoup">
    	<div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
    <div class="clear"></div>
    </div>
    <div class="makeModcoup">
    	<div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
    <div class="clear"></div>
    </div>
    <div class="makeModcoup">
    	<div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
            <div class="clear"></div></div>
        </div>
        <div class="subCupBox">
        	<div class="detailBoxIn">
            <p>Honda pilot 2004  $80.00 </p>
            <p class="blueText1">Radiator</p>
            
            <div class="cupCarPic">
            <a href="new-list.php"><img border="0" alt="car" src="images/car.jpg"></a>
            </div>
            <p class="viewNo">New york, new york</p>
            <p class="mygrinText">Stock# 01254</p>
            <p class="myRedText">New </p>
            <p><a href="car-details.php" class="blueText1">View more detail</a></p>
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