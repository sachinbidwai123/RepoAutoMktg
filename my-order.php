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
<p class="SubHead">orders 
  <span class="welcomeName">Welcome Nilesh B.</span>
  <span class="back"><a href="dashboard-pvt.php"><span>«</span> Back </a></span>
</p>
<div id="tableDash">
<div class="outTbl">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <thead class="dashTabHead">
      <tr>
        <td width="18%" align="center" valign="middle">Order No.</td>
        <td width="20%" align="center" valign="middle">Order Date</td>
        <td width="19%" align="center" valign="middle">Total Amount($)</td>
        <td width="20%" align="center" valign="middle">Payment Status</td>
        <td width="23%" align="center" valign="middle">Manage</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center" valign="middle">1</td>
        <td align="center" valign="middle">03/07/2015</td>
        <td align="center" valign="middle">155.00</td>
        <td align="center" valign="middle">Paid</td>
        <td align="center" valign="middle">
        	<ul class="tabIcon">
            	<li><a href="view-order.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="print-order.php"><img src="images/printer.png" alt="umg"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
            </ul>
        </td>
      </tr>
      <tr>
        <td align="center" valign="middle">2</td>
        <td align="center" valign="middle">03/07/2015</td>
        <td align="center" valign="middle">195.00</td>
        <td align="center" valign="middle">Unpaid</td>
        <td align="center" valign="middle">
        <ul class="tabIcon">
            	<li><a href="view-order.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="print-order.php"><img src="images/printer.png" alt="umg"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
            </ul>
        </td>
      </tr>
      <tr>
        <td align="center" valign="middle">3</td>
        <td align="center" valign="middle">03/07/2015</td>
        <td align="center" valign="middle">125.00</td>
        <td align="center" valign="middle">Unpaid</td>
        <td align="center" valign="middle">
        <ul class="tabIcon">
            	<li><a href="view-order.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="print-order.php"><img src="images/printer.png" alt="umg"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
            </ul>
        </td>
      </tr>
      <tr>
        <td align="center" valign="middle">4</td>
        <td align="center" valign="middle">03/07/2015</td>
        <td align="center" valign="middle">215.00</td>
        <td align="center" valign="middle">Paid</td>
        <td align="center" valign="middle">
        <ul class="tabIcon">
            	<li><a href="view-order.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="print-order.php"><img src="images/printer.png" alt="umg"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
            </ul>
        </td>
      </tr>
      <tr>
        <td align="center" valign="middle">5</td>
        <td align="center" valign="middle">03/07/2015</td>
        <td align="center" valign="middle">95.00</td>
        <td align="center" valign="middle">Paid</td>
        <td align="center" valign="middle">
        <ul class="tabIcon">
            	<li><a href="view-order.php"><img src="images/View.png" alt="img"></a></li>
                <li><a href="print-order.php"><img src="images/printer.png" alt="umg"></a></li>
                <li><a href="#"><img src="images/delete.png" alt="delete"></a></li>
            </ul>
        </td>
      </tr>
    </tbody>
  </table>
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