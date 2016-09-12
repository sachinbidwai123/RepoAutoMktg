<?php
/* Developed By- Supra Int.
Modify Date: 18-May-2015
Section- remember password page      
Description- remember password page  
*/  
 
ob_start();
session_start();
include("includes/classes/db.php");
include("includes/comman_function.php");
 
include("settings.php");
$errmsg="";
	if(isset($_POST['btn_submit']))
	{
		$login_query = mysql_query("select user_email,user_login,user_pass,status from car_usermaster where user_login='".protect_data($_POST['text_username'])."' and status=1");
		if($login_query and mysql_num_rows($login_query)>0)
		{
			$login_details = mysql_fetch_array($login_query);
			$text_field='Password';
			$text_value=md5_decrypt($login_details['user_pass'],$encryption_password,16);
			$email=$login_details['user_email'];
			$uname=$login_details['user_login'];
			include("email/forgotpasswordemail.php"); 
			$errmsg="Your password is sent to your email Id.";
		}//end if
		else 
		{
			$errmsg="Invalid user name";
			$_POST['text_username']="";
		}//end else
	}//end if
	
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
<script language="javascript" src="js/functions.js"></script>
</head>
<body>
<? include('header.php');?>
<div id="body" class="logBody">
<div class="contain">
<p class="SubHead">Remember password</p>
<div id="whiteBoxLogin">
<div id="logInvest">
<div class="commonBoxLog">
    <!--<div class="heading">
    <span class="headText">investors User</span>
    </div>-->
    <form action="" method="post" name="remember_passfrm" id="remember_passfrm" onSubmit="return get_passwd();">
    <div align="center"><span id="MySpan" class="red-text"><?=$errmsg?></span></div>
    <label class="lableMy">Enter username:</label>
    <input type="text" name="text_username" id="text_username" placeholder="Username" class="mySearchLog" >
   	 	<div id="error_uname" class="red-text"></div>
    <div class="clear"></div>
    <input class=" myButt leftSpace" type="submit" value="SUBMIT" name="btn_submit" id="btn_submit" >
    </form>
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
</html>