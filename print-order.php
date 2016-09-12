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
<p class="SubHead">Print orders 
  <span class="welcomeName">Welcome Nilesh B.</span>
  <span class="back"><a href="my-order.php"><span>«</span> Back </a></span>
</p>
    <div id="whiteCupn viewFixed">
    <div id="viewBox">
    	<table border="0" cellspacing="0" cellpadding="0" class="tblScroll" >
  <tr>
    <td align="center" valign="bottom" style="padding-right:13px !important;">
    <table border="0" cellspacing="0" cellpadding="0" class="veiwClass">
      <tr>
        <td>Order No.:  </td>
        <td>32 </td>
      </tr>
      <tr>
        <td>Order Date: </td>
        <td>2015-01-23 </td>
      </tr>
      <tr>
        <td>Order Status: </td>
        <td>Processing </td>
      </tr>
      <tr>
        <td>Order Total:</td>
        <td>$150.00</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="bottom" style="padding-right:13px;">
    	<div class="viewOrderLeft">
        <table width="100%" cellspacing="1" cellpadding="3" border="0" align="center" style="border:1px solid #ccc; background-color:#eee;">
        <tbody><tr>
          <th bgcolor="#666666" align="left" scope="row" class="tdhead" colspan="2" style="color:#fff;">Billing Information</th>
          </tr>
        <tr>
          <th width="51%" bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Name:</span></th>
          <th width="49%" bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">Smith Johnson</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Phone:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">124567890</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Email:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">smith@gmail.com</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Address:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">abc adress</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">State:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">Gorgia</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">City:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">Atlanata</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Zip code:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">
          <span class="boldtxt">30017</span></th>
          </tr>
        </tbody></table>
        </div>
        <div class="viewOrderRight">
        <table width="100%" cellspacing="1" cellpadding="3" border="0" align="center" style="border:1px solid #ccc; background-color:#eee;">
        <tbody><tr>
          <th bgcolor="#666666" align="left" scope="row" class="tdhead" colspan="2" style="color:#fff;">Shipping Information</th>
          </tr>
        <tr>
          <th width="50%" bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Name:</span></th>
          <th width="50%" bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">Smith Johnson</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Phone:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">124567890</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Email:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">smith@gmail.com</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Address:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">abc adress</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">State:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">Gorgia</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">City:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">Atlanata</th>
          </tr>
        <tr>
          <th bgcolor="#FFFFFF" align="left" scope="row"><span class="boldtxt">Zip code:</span></th>
          <th bgcolor="#FFFFFF" align="left" scope="row" class="boldtxt">
          <span class="boldtxt">30017</span></th>
          </tr>
        </tbody></table>
        </div>
    </td>
  </tr>
  <tr>
    <td align="center" valign="bottom" style="padding-right:13px !important">
    	<table width="99%" cellspacing="1" cellpadding="4" border="0" align="center" class="bodytextNew">
<tbody>
<tr style=" background:#333 !important; ">
<td height="32" bgcolor="#FFFFFF" align="left" colspan="6" class="boldtxt">
<strong class="blueTextHaed">Order Car Details:</strong>
</td>
</tr>
<tr style=" background:#333 !important; ">
<td width="93" height="32" align="center" class="txt">
<strong class="whiteText">Part No</strong>
</td>
<td width="206" align="center" class="txt">
<strong class="whiteText">Part Name</strong>
</td>
<td width="148" align="center" class="txt"><strong class="whiteText">Make</strong></td>
<td width="137" align="center" class="txt">
<strong class="whiteText">Model</strong>
</td>
<td width="186" align="center" class="txt">
<strong class="whiteText">Quantity</strong>
</td>
<td width="140" align="center" class="txt">
<strong class="whiteText">Amount</strong>
</td>
</tr>
<tr style="border: solid 1px #000 !important;">
<td height="30" bgcolor="#FFFFFF" align="center" class="">AV231</td>
<td bgcolor="#FFFFFF" align="center" class="">Car Seat </td>
<td bgcolor="#FFFFFF" align="center" class="">Acura </td>
<td bgcolor="#FFFFFF" align="center" class="">Integra </td>
<td bgcolor="#FFFFFF" align="center" class="">2</td>
<td bgcolor="#FFFFFF" align="center" class="">$1000.00</td>
</tr>
<tr>
<td height="30" bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>Sub Total :</strong></td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>$150.00</strong></td>
</tr>
<tr>
<td height="30" bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>Shipping and Handling ():</strong></td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>$0.00 </strong></td>
</tr>
<tr>
<td height="30" bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>Tax Amount :</strong></td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>$0.00 </strong></td>
</tr>
<tr>
<td height="30" bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>Discount :</strong></td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>$ 0.00 </strong></td>
</tr>
<tr>
<td height="30" bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""></td>
<td bgcolor="#FFFFFF" align="center" class=""> </td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>Order Total :</strong></td>
<td bgcolor="#FFFFFF" align="center" class=""><strong>$150.00 </strong></td>
</tr>

</tbody></table>
    </td>
  </tr>
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