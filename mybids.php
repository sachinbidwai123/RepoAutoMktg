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
<div id="body" class="logBody">
<div class="contain">
<p class="SubHead">My bids
  <span class="welcomeName">Welcome Nilesh B.</span>
  <span class="back"><a href="dashboard-pvt.php"><span>«</span> Back </a></span>
</p>
<!--<input class=" myButt rightBtn" type="button" value="Manage auto repair Club" name="" onclick="location.href='auto-repair.php';">
<a href="auto-repair.php" class="rightBtn">Add auto repair Club</a>
<div class="clear"></div>-->
<div id="tableDash">
  <div class="outTbl">
    <div id="tableDash2">
      <div class="outTbl">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <thead class="dashTabHead">
            <tr>
              <td width="13%" align="center" valign="middle">Seller name</td>
              <td width="14%" align="center" valign="middle">CAr image</td>
              <td width="14%" align="center" valign="middle">Description</td>
              <td width="14%" align="center" valign="middle">Bid amount</td>
              <td width="15%" align="center" valign="middle">Bid status</td>
              <td width="15%" align="center" valign="middle">Bid date</td>
              <td width="15%" align="center" valign="middle">Manage</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center" valign="middle">Daniel Vettori</td>
              <td align="center" valign="middle">
              	<div class="tableImg">
                        <a href="#">
                        <img border="0" src="images/car1.jpg" alt="car">
                        </a> 
                </div>
              </td>
              <td align="center" valign="middle">
                Year : &nbsp; 2011 <br>
                Make : &nbsp; AC<br>
                Model : &nbsp; 428 
              </td>
              <td align="center" valign="middle">$1700.00</td>
              <td align="center" valign="middle">Pending</td>
              <td align="center" valign="middle">03/08/2014</td>
              <td align="center" valign="middle"><ul class="tabIcon">
                <li><a href="view-bids.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
              </ul></td>
            </tr>
            <tr>
              <td align="center" valign="middle">Martin</td>
              <td align="center" valign="middle">
              <div class="tableImg">
                        <a href="#">
                        <img border="0" src="images/car1.jpg" alt="car">
                        </a> 
                </div>
              </td>
              <td align="center" valign="middle">
                Year : &nbsp; 2011 <br>
                Make : &nbsp; AC<br>
                Model : &nbsp; 428
              </td>
              <td align="center" valign="middle">$800.00</td>
              <td align="center" valign="middle">Pending</td>
              <td align="center" valign="middle">03/08/2014</td>
              <td align="center" valign="middle"><ul class="tabIcon">
                <li><a href="view-bids.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
              </ul></td>
            </tr>
            <tr>
              <td align="center" valign="middle">Brendon </td>
              <td align="center" valign="middle">
              <div class="tableImg">
                        <a href="#">
                        <img border="0" src="images/car1.jpg" alt="car">
                        </a> 
                </div>
              </td>
              <td align="center" valign="middle">
                Year : &nbsp; 2011 <br>
                Make : &nbsp; AC<br>
                Model : &nbsp; 428
              </td>
              <td align="center" valign="middle">$1000.00</td>
              <td align="center" valign="middle">Pending</td>
              <td align="center" valign="middle">03/08/2014</td>
              <td align="center" valign="middle"><ul class="tabIcon">
                <li><a href="view-bids.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
              </ul></td>
            </tr>
            <tr>
              <td align="center" valign="middle">Ronny Dey</td>
              <td align="center" valign="middle">
              <div class="tableImg">
                        <a href="#">
                        <img border="0" src="images/car1.jpg" alt="car">
                        </a> 
                </div>
              </td>
              <td align="center" valign="middle">
                Year : &nbsp; 2011 <br>
                Make : &nbsp; AC<br>
                Model : &nbsp; 428
              </td>
              <td align="center" valign="middle">$1300.00</td>
              <td align="center" valign="middle">Pending</td>
              <td align="center" valign="middle">03/08/2014</td>
              <td align="center" valign="middle"><ul class="tabIcon">
                <li><a href="view-bids.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
              </ul></td>
            </tr>
            <tr>
              <td align="center" valign="middle">Stiffen Fleming</td>
              <td align="center" valign="middle">
              <div class="tableImg">
                        <a href="#">
                        <img border="0" src="images/car1.jpg" alt="car">
                        </a> 
                </div>
              </td>
              <td align="center" valign="middle">
              	Year : &nbsp; 2011 <br>
                Make : &nbsp; AC<br>
                Model : &nbsp; 428
              </td>
              <td align="center" valign="middle">$1230.00</td>
              <td align="center" valign="middle">Pending</td>
              <td align="center" valign="middle">03/08/2014</td>
              <td align="center" valign="middle"><ul class="tabIcon">
                <li><a href="view-bids.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
              </ul></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
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