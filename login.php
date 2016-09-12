<?
/*  Developed By: Supra Int.
    Modify Date: 16-MAy-2015
    Section: User Login Page  
    Description: User Login Page 
*/
ob_start();
session_start();
include("includes/classes/db.php");
include("includes/comman_function.php");
$errmsg="";

if(isset($_POST['btn_login']))
{
	if($errmsg=="")
	{
		
	//$decrypted_userpass = md5_decrypt($login_details['txt_passwd'],$encryption_password,16);	
	$login_query = mysql_query("select user_id,user_login,user_pass,user_type,status from car_usermaster where user_login='".protect_data($_POST['txt_usernm'])."' and status=1");
	if($login_query and mysql_num_rows($login_query)>0)
	{
		$login_details = mysql_fetch_array($login_query);
		/*Password made in decrypted format and check it with user input password.*/
		$decryptedpass = md5_decrypt($login_details['user_pass'],$encryption_password,16);	 
		if($decryptedpass == mysql_real_escape_string(protect_data($_POST['txt_passwd'])))
		{
			 $_SESSION["user_id"] = $login_details["user_id"];
			 $_SESSION["user_login"] = $login_details["user_login"];
			 $_SESSION["user_type"] = $login_details["user_type"];
			 $user_type= $login_details["user_type"];
			 if($user_type=="Private")
			 {
			echo '<script language="javascript" type="text/javascript">window.location.href ="dashboard-pvt.php"</script>'; 
			 }
			 else
			 {
				echo '<script language="javascript" type="text/javascript">window.location.href ="index.php"</script>';  
			 }
			
		}
		else 
		{
			$errmsg="Invalid username or password";
			$_POST['txt_usernm']="";
		}
	} 
	else 
	{
		$errmsg="Invalid username or password";
		$_POST['txt_usernm']="";
	}
  }	
	
}//if


 if(isset($_POST['btncon']))
 {
	 echo "<script type='application/javascript' language='javascript'>window.location.href='".$_POST['RadioGroup1']."'</script>";
	
 }//if
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
<p class="SubHead">Login / Register Here </p>
<div id="whiteBoxLogin1">
<div id="logLeft">
<div class="commonBoxLog">
    <div class="heading">
    <span class="headText">WELCOME TO CAR DOCTORS</span>
    </div>
<div class="cupCarPic">
<img border="0" alt="car" src="images/car.jpg">
</div>
<p class="blueText1">Come make money with us and discover the joy of winning, selling and buying health cars.</p>
  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged  
    
   </div>
</div>
<div id="logRight">
<div class="commonBoxLog">
    <div class="heading">
    <span class="headText">Existing User</span>
    </div>
    <form action="" method="post" name="loginuserfrm" id="loginuserfrm" onSubmit="return get_login();">
     <div align="center"><span id="MySpan" class="red-text"><?=$errmsg?></span></div>
    <label class="lableMy">Username:</label>
    <input type="text" class="mySearchLog" placeholder="Username" name="txt_usernm" id="txt_usernm">
      	<div id="error_usernm" class="red-text"></div>
    <div class="clear"></div>
    <label class="lableMy">Password:</label>
    <input type="password" placeholder="Password" class="mySearchLog" id="txt_passwd" name="txt_passwd">
    	<div id="error_passwd" class="red-text"></div>
    <div class="clear"></div>
    <p><a class="forgot" href="remember-password.php">Can't remember your password</a></p>
    <p><a class="forgot" href="remember-username.php">Can't remember your Username</a></p>
    <input type="submit" name="btn_login" id="btn_login" value="LOGIN" class=" myButt leftSpace">
    </form>
    <p>&nbsp; </p>
   </div>
	<div class="commonBoxLog">
    <div class="heading">
    <span class="headText">Don't have an Account, register</span>
    <p></p>
    </div>
    <label class="lableMy"></label>
    <form name="form1" method="post" action="">
<input type="radio" name="RadioGroup1" value="register-pvt.php" id="Radio1">
          Private account
          <br>
          <input type="radio" name="RadioGroup1" value="register-dlr.php" id="Radio1">
          Dealership account
    
    <div class="clear"></div>
   <input type="submit" id="btncon" name="btncon" value="CONTINUE" class=" myButt leftSpace">
   </form>
   </div>
   
   <p class="openInvstmnt">Create stayed monthly cash ﬂow  using Car doctors auto investment ﬁnance trust
   <br><em> OPEN INVESTMENT ACCOUNT </em></p>
<div class="clear"></div>
    <label class="lableMy"></label>
    <form name="form2" method="post" action="">
<input type="radio" name="RadioGroup1" value="sssssss" id="RadioGroup1_0">
          Private investment account
          <br>
          <input type="radio" name="RadioGroup1" value="dddddddddd" id="RadioGroup1_1">
          Business investment account
    </form>
    <div class="clear"></div>
    <input type="button" onClick="#" name="input" value="CONTINUE" class=" myButt leftSpace">
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