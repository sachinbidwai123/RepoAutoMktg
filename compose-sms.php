<?php
include('session_validation.php');
$userid=$_SESSION["user_id"];
$user_type=$_SESSION["user_type"];
if(isset($_POST['btn_send']))
{
	mysql_query("INSERT INTO `message_system`(from_id,`to_id`, `from_type`, `to_type`, `message`, `flag_read`, `msg_date`) VALUES ('".$userid."','0','".$user_type."','Administrator','".addslashes($_POST['txt_msg'])."','0','".date('Y-m-d H:i:s')."')");
	
	echo '<script language="javascript" type="application/javascript">window.location.href ="message.php"</script>';
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
<div id="body">
<div class="contain">
<p class="SubHead">Messages
  <span class="welcomeName">
  	  <? 
		$uname=$_SESSION["user_login"];
		if($uname!="")
		{
			echo "Welcome ".$_SESSION["user_login"]." ";
		}
	 ?>	
  </span>
  <span class="back"><a href="message.php"><span>«</span> Back </a></span>
</p>
<div id="whiteBoxLogin1">
<div class="investBox">
<div class="inboxLine">
<span class="inboxTitle">Compose message</span>
<div class="clear"></div>
</div>
<div id="compMailBox">
<div id="logInvest">
<div class="commonBoxLog">
 <form action="" method="post" name="compose_smsfrm" id="compose_smsfrm" onSubmit="return compose_sms();">
      <label class="lableMy">To :</label>
      <div class="admnstr">Administrator</div>
      <div class="clear"></div>
      <label class="lableMy">Message :</label>
    <textarea name="txt_msg" id="txt_msg" cols="" rows="5" class="mySearchLog"></textarea>
    	<div id="error_msg" class="red-text" align="center"></div>
    <div class="clear"></div>
    
    <!--<label class="lableMy">Add Attachments :</label>
    <input name="" type="file" class="fileFild">
    <div class="clear"></div>-->
    <input type="submit" name="btn_send" id="btn_send" value="SEND" class=" myButt leftSpace">
  </form>
    <div class="clear"></div>
   </div>
</div>
<div class="clear"></div>
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
</html>