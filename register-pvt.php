<?
/*  Developed By: Supra Int.
    Modify Date: 30-March-2015
    Section: Add private users Page  
    Description: Add private users Page 
*/
ob_start();
session_start();
include("includes/classes/db.php");
include("includes/comman_function.php");
include("settings.php");
if(isset($_POST['btn_save']))
{
$encrypt_pass=md5_encrypt(mysql_real_escape_string(protect_data($_POST['txt_password'])),$encryption_password);
	//To check private user email id or Username is already exist.
	$ckemail=mysql_query("select user_email from car_usermaster where user_email='".protect_data($_POST['txt_email'])."'");
	$ckuname=mysql_query("select user_login from car_usermaster where user_login='".protect_data($_POST['txt_uname'])."'");
	
		//To check private user email id or Username is already exist.
		if(($ckemail and mysql_num_rows($ckemail)==0) and $ckuname and mysql_num_rows($ckuname)==0)
		{
			
			if($_POST['txtcaptchacode']!="")
				{
					if($_SESSION['captcha']==$_POST['txtcaptchacode'])
					{
					//=====insert into login table
						mysql_query("INSERT INTO `car_usermaster`(`user_email`, `user_login`, `user_pass`, `user_type`, `account_type`, `status`, `created_date`) VALUES ('".protect_data($_POST['txt_email'])."','".protect_data($_POST['txt_uname'])."','".$encrypt_pass."','Private','".protect_data($_POST['opttype'])."','1','".date('Y-m-d H:i:s')."')");
			$insert_id = mysql_insert_id();		
				//To insert private user record into car_buyers.		
			$insert_query=mysql_query("INSERT INTO `car_buyers`(`user_type`,`fname`,`lname`,`username`,`email_id`,`secondary_emailid`,`password`, `address`,`state`,`city`,`zip_code`,`contact_no`,`secondary_contactno`,`status`,`cretead_date`,user_id) VALUES ('".protect_data($_POST['opttype'])."','".protect_data($_POST['txt_fname'])."','".protect_data($_POST['txt_lname'])."','".protect_data($_POST['txt_uname'])."','".protect_data($_POST['txt_email'])."','".protect_data($_POST['txt_email2'])."','".$encrypt_pass."','".protect_data($_POST['txt_address'])."','".protect_data($_POST['selbuyer_mailingstate'])."','".protect_data($_POST['txt_city'])."','".protect_data($_POST['txt_zip'])."','".protect_data($_POST['txt_contact'])."','".protect_data($_POST['txt_contact2'])."','1','".date('Y-m-d H:i:s')."','".$insert_id."')");
	             //============Send email to user===============
				    $account_type=protect_data($_POST['opttype']);
					$fname=protect_data($_POST['txt_fname']);
					$lname=protect_data($_POST['txt_lname']);
				 	$emailid=protect_data($_POST['txt_email']);
					$phno=protect_data($_POST['txt_contact']);
					$usernm=protect_data($_POST['txt_uname']);
					$passwd=protect_data($_POST['txt_password']);
					include("email/register-pvt-email.php"); 
				 //=============================================
				echo '<script language="javascript" type="application/javascript">window.location.href ="login.php"</script>';
				}//if 
				else
					{
	    				 $captcha_err = "Please Enter valid Security code.";
					}//else
			}//if
		}//if
		//To check private user email id or Username is already exist.
		if(mysql_num_rows($ckemail) > 0)
		{ 
			$errormsg="Email Id is already exists";
		}//if
		else if(mysql_num_rows($ckuname)>0)
		{
			$errormsg="Username is already exists";
		}//else if
			
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
<form action="" method="post" name="addprivatefrm" id="addprivatefrm" >
<input type="hidden" name="flag" value="updateflag" />
<? include('header.php');?>
<div id="body" class="logBody">
<div class="contain">
<p class="SubHead">Private account Register Here </p>
<div id="whiteBoxLogin1">
<div align="center" class="red-text">
 <?=$errormsg?>
</div>
  <div id="privAcc">
    <div class="commonBoxLog">
    <div class="pvtOutBox">
    <label class="lableMy blueLab">Account type:</label>
    <div class="accRad">
    <input name="opttype" type="radio" id="opttype1"  
  value="Regular" checked/>Regular &nbsp;<input name="opttype" type="radio" id="opttype2" 
  value="Free"/>Free
    </div>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="pvtOutBox">
    <label class="lableMy">First Name:<span class="red-text">*</span></label>
    <input type="text" class="mySearchLog" placeholder="First name" name="txt_fname" id="txt_fname" value="<?=protect_data($_POST['txt_fname'])?>">
    <div id="fn" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Last Name:<span class="red-text">*</span></label>
    <input type="text" class="mySearchLog" placeholder="Last name" name="txt_lname" id="txt_lname" value="<?=protect_data($_POST['txt_lname'])?>">
    <div id="ln" class="red-text"></div>
    <div class="clear"></div>
    </div>
   <div class="pvtOutBox">
    <label class="lableMy">Email address:<span class="red-text">*</span></label>
    <input type="email" placeholder="Email address" class="mySearchLog" id="txt_email" name="txt_email" value="<?=protect_data($_POST['txt_email'])?>">
    <div id="em" class="red-text"></div>
    <div class="clear"></div>
    </div>
       
    <div class="pvtOutBox">
    <label class="lableMy"> Secondary email address:</label>
    <input type="email" placeholder="Secondary email address" class="mySearchLog" id="txt_email2" name="txt_email2" value="<?=protect_data($_POST['txt_email2'])?>">
   <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Home address:<span class="red-text">*</span></label>
    <input type="text" class="mySearchLog" placeholder="Home address" name="txt_address" id="txt_address" value="<?=protect_data($_POST['txt_fname'])?>" >
    <div id="ad" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <? $rwstate=mysql_query("SELECT stateid,abbreviation,state FROM usa_state" ); ?>
    <label class="lableMy">State:<span class="red-text">*</span></label>
    <select name="selbuyer_mailingstate" id="selbuyer_mailingstate" class="mySearchLog">
  <option value="">-Select-</option>
  <? while($mailingstate=mysql_fetch_array($rwstate)){ ?>
  <option value="<?=$mailingstate['abbreviation']?>" <? if($_POST['selbuyer_mailingstate']==$mailingstate['abbreviation']){ echo 'selected';}?>>
  <?=$mailingstate['state']?>
  </option>
  <? }//while ?>
</select>
<div id="st" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">City:<span class="red-text">*</span></label>
    <input type="text" placeholder="City" class="mySearchLog" id="txt_city" name="txt_city" value="<?=protect_data($_POST['txt_city'])?>">
    <div id="ct" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy"> Zip code:<span class="red-text">*</span></label>
    <input type="text" placeholder="Zip code" class="mySearchLog" id="txt_zip" name="txt_zip" onKeyPress="return isNumberKey(event);" maxlength="5" value="<?=protect_data($_POST['txt_zip'])?>">
    <div id="zp" class="red-text"></div>
    <div class="clear"></div>
    </div>
 
    <div class="pvtOutBox">
    <label class="lableMy"> Phone number:<span class="red-text">*</span></label>
    <input type="text" placeholder=" Phone number" class="mySearchLog" id="txt_contact" name="txt_contact" onKeyPress="return isNumberKey(event);" maxlength="10" value="<?=protect_data($_POST['txt_contact'])?>">
    <div id="cn" class="red-text"></div>
    <div class="clear"></div>
    </div>
      
    <div class="pvtOutBox">
    <label class="lableMy">Secondary  phone number:</label>
    <input type="text" placeholder="Secondary phone number " class="mySearchLog" id="txt_contact2" name="txt_contact2" onKeyPress="return isNumberKey(event);" maxlength="10" value="<?=protect_data($_POST['txt_contact2'])?>">
    <div class="clear"></div>
    </div>
  
    <div class="pvtOutBox">
    <label class="lableMy">Username:<span class="red-text">*</span></label>
    <input type="text" placeholder="Username" class="mySearchLog" id="txt_uname" name="txt_uname" value="<?=protect_data($_POST['txt_uname'])?>">
    <div id="err_uname" class="red-text"></div>
    <div class="clear"></div>
    </div>
    
    <div class="pvtOutBox">
    <label class="lableMy">Password:<span class="red-text">*</span></label>
    <input type="password" placeholder="Password" class="mySearchLog" id="txt_password" name="txt_password" value="<?=protect_data($_POST['txt_password'])?>">
    <div id="pw" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Confirm password:<span class="red-text">*</span></label>
    <input type="password" placeholder="Reenter password " class="mySearchLog" id="txt_repass" name="txt_repass" value="<?=protect_data($_POST['txt_repass'])?>">
    <div id="re_enterpw" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
     <div class="pvtOutBox">
     <div class="captureImg"><img src="captcha.php" alt="captcha image" width="60" height="30" align="absmiddle" style=" margin-bottom:5px;" /></div>
     <div class="captureFild">
     <input name="txtcaptchacode" type="text" id="txtcaptchacode"  class="mySearchLog capTextBox" value="" maxlength="3" />
              <div id="captchamsg" class="red-text">
                <?=$captcha_err?>
              </div>
     </div>
     <div class="clear"></div>
     </div>

    <div class="clear"></div>
    <input type="submit" onClick="return add_buyer();" name="btn_save" value="Creat an account" class=" myButt acc" id="btn_save">
    </div>
</div>
<div class="clear"></div>
</div>
</div>
</div>

<footer>
<? include('bottom.php');?>
</footer>
</form>
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