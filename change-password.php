<?
/* Developed By- Supra Int.
Modify Date: 18-May-2015
Section- change password page    
Description- change password page  
*/
include('session_validation.php');
$userid=$_SESSION["user_id"];
$errmsg="";
//**************update password..
if(isset($_POST['btn_submit']))
{ //checking username and password with admin_table table	
	$login_query = mysql_query("select user_id,user_login,user_pass,user_type,status from car_usermaster where user_id='".$userid."' and status=1");
	 //checking username and password
	if($login_query and mysql_num_rows($login_query)>0)
	{
		$login_details = mysql_fetch_array($login_query);
		$decryptedpass = md5_decrypt($login_details['user_pass'],$encryption_password,16);	
		if($decryptedpass == mysql_real_escape_string(protect_data($_POST['txt_oldpass'])))
		{
			$encrypt_pass=md5_encrypt(mysql_real_escape_string(protect_data($_POST['txt_newpass'])),$encryption_password);
			
			$q=mysql_query("update car_usermaster SET user_pass='".$encrypt_pass."' where user_id='".$userid."' ");
			$q=mysql_query("update car_buyers SET password='".$encrypt_pass."' where user_id='".$userid."' ");
			if($q==1)
			{
				//$errmsg='Password updated successfully.';
				echo '<script language="javascript" type="text/javascript">window.location.href ="change-password.php?flag=updated"</script>';
			}//end if
			else
			{
				$errmsg='Password not updated.';
			}//else end
				
		}//end if
		else
		{
			$errmsg='Wrong old password.';
			
		}//else end
	}//end if
	
}//end if
//*******messages
if($errmsg=="")
{
	 if($_GET['flag']=='updated')
	 { 
		 $errmsg= "Password updated successfully.";
	 }//end if
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
<p class="SubHead"> Change Password
<span class="welcomeName">
<? 
$uname=$_SESSION["user_login"];
if($uname!="")
{
	echo "Welcome ".$_SESSION["user_login"]." ";
}
?>
</span>
<span class="back"><a href="dashboard-pvt.php"><span>«</span> Back </a></span>
</p>
<div id="whiteBoxLogin">
<div id="logInvest">
<div class="commonBoxLog">
 <form action="" method="post" name="changepassfrm" id="changepassfrm" onSubmit="return changepass();">
 <input type="hidden" name="flag" value="updateflag" />
  <div><span style="margin-left:100px;" id="MySpan" class="red-text"><?=$errmsg?></span></div>
    <label class="lableMy">Old Password:</label>
    <input type="password" name="txt_oldpass" id="txt_oldpass" class="mySearchLog" placeholder="Old password">
     <div id="error_oldpass" class="red-text"></div>
    <div class="clear"></div>
    
    <label class="lableMy">New Password:</label>
    <input type="password" name="txt_newpass" id="txt_newpass" class="mySearchLog" placeholder="New password">
    	<div id="error_newpass" class="red-text"></div>
    <div class="clear"></div>
    
    <label class="lableMy">Confirm Password:</label>
    <input type="password" name="txt_confirmpass" id="txt_confirmpass" class="mySearchLog" placeholder="Confirm password">
     <div id="error_confirmpass" class="red-text"></div>
    <div class="clear"></div>

    <input type="submit" name="btn_submit" id="btn_submit" value="SUBMIT" class=" myButt leftSpace">
    </form>
    </div>
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