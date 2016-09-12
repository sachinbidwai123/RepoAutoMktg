<?
include('session_validation.php');
$userid=$_SESSION["user_id"];
if(isset($_POST['btnsub']))
{
	$encrypt_pass=md5_encrypt(mysql_real_escape_string(protect_data($_POST['txt_password'])),$encryption_password);
	//To check private  user email id or Username is already exist.
	$masterId = mysql_fetch_array(mysql_query("select user_id from car_buyers where buyer_id='".protect_data($_POST['edit_id'])."'"));	
	$ckemail=mysql_num_rows(mysql_query("select user_email from car_usermaster where user_email='".protect_data($_POST['txt_email'])."' and user_id!='".$masterId['user_id']."'"));
	$ckuname=mysql_query("select user_login from car_usermaster where user_login='".protect_data($_POST['txt_lname2'])."' and user_id!='".$masterId['user_id']."' ");	
   //To check private  user email id or Username is already exist.		
   if($ckemail==0 && $ckuname and mysql_num_rows($ckuname)==0) 
		{				
$update_query=mysql_query("update `car_buyers` SET `user_type`='".protect_data($_POST['opttype'])."',`fname`='".protect_data($_POST['txt_fname'])."', `lname`='".protect_data($_POST['txt_lname'])."', `username`='".protect_data($_POST['txt_lname2'])."', `email_id`='".protect_data($_POST['txt_email'])."',`secondary_emailid`='".protect_data($_POST['txt_email2'])."', `password`='".$encrypt_pass."', `address`='".protect_data($_POST['txt_address'])."', `state`='".protect_data($_POST['selbuyer_mailingstate'])."', `city`='".protect_data($_POST['txt_city'])."', `zip_code`='".protect_data($_POST['txt_zip'])."', `contact_no`='".protect_data($_POST['txt_contact'])."',`secondary_contactno`='".protect_data($_POST['txt_contact2'])."',`modified_date`='".date('Y-m-d H:i:s')."' where buyer_id='".protect_data($_POST['edit_id'])."'");

				mysql_query("update `car_usermaster` SET `user_email`='".protect_data($_POST['txt_email'])."', `user_login`='".protect_data($_POST['txt_lname2'])."', `user_pass`='".$encrypt_pass."', `account_type`='".protect_data($_POST['opttype'])."', `modified_date`='".date('Y-m-d H:i:s')."' where user_id='".$masterId['user_id']."'");
				
		echo '<script language="javascript" type="application/javascript">window.location.href ="profile.php?flag=updated"</script>';
		}//if
		 if($ckemail>0)
		 {
			 $errormsg="Email Id is already exists";
		}//if
		else if(mysql_num_rows($ckuname)>0)
		{
			$errormsg="Username is already exists";
		}//elseif
}//if
$view_buyer = mysql_fetch_array(mysql_query("select * from car_buyers where user_id='".$userid."'"));
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
<p class="SubHead"> My Profile 
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
<form action="" method="post" name="addbuyerfrm" id="addbuyerfrm" >
<input type="hidden" name="flag" value="updateflag" />
<input type="hidden" name="edit_id" value="<?=$_SESSION["user_id"]?>" />
    <label class="lableMy">First name:<span class="red-text">*</span></label>
   <input name="txt_fname" type="text" class="mySearchLog" id="txt_fname" value="<?=protect_data($view_buyer['fname'])?>">
   <div id="fn" class="red-text"></div>
    <div class="clear"></div>
     <label class="lableMy">Last name:<span class="red-text">*</span></label>
    <input name="txt_lname" type="text" class="mySearchLog" id="txt_lname" value="<?=protect_data($view_buyer['lname'])?>">
    <div id="ln" class="red-text"></div>
    <div class="clear"></div>
     <label class="lableMy">Email:<span class="red-text">*</span></label>
    <input name="txt_email" type="text" class="mySearchLog" id="txt_email" value="<?=protect_data($view_buyer['email_id'])?>">
    <div id="em" class="red-text"></div>
    <div class="clear"></div>
    <label class="lableMy">Secondary Email:</label>
   <input name="txt_email2" type="text" class="mySearchLog" id="txt_email2" value="<?=protect_data($view_buyer['secondary_emailid'])?>">
    <div class="clear"></div>
    <label class="lableMy">User Name:<span class="red-text">*</span></label>
   <input name="txt_lname2" type="text" class="mySearchLog" id="txt_lname2" value="<?=protect_data($view_buyer['username'])?>">
<div id="err_uname" class="red-text"></div>
    <div class="clear"></div>
    <label class="lableMy">Password:<span class="red-text">*</span></label>
   <input name="txt_password" type="text" class="mySearchLog" id="txt_password" value="<?
$decryptedpass = md5_decrypt($view_buyer['password'],$encryption_password,16);
echo $decryptedpass; ?>">
<div id="pw" class="red-text"></div>
    <div class="clear"></div>
    <label class="lableMy">Address:<span class="red-text">*</span></label>
    <textarea name="txt_address" type="text" class="mySearchLog" id="txt_address"><?=protect_data($view_buyer['address'])?></textarea>
    <div id="ad" class="red-text"></div>
    <div class="clear"></div>
    <? $rwstate=mysql_query("SELECT stateid,abbreviation,state FROM usa_state" ); ?>
    <label class="lableMy">	State:<span class="red-text">*</span></label>
    <select name="selbuyer_mailingstate" id="selbuyer_mailingstate" class="mySearchLog" onChange="getzipcode(this.value)">
  <option value="">-Select-</option>
  <? while($mailingstate=mysql_fetch_array($rwstate)){ ?>
  <option value="<?=$mailingstate['abbreviation']?>" 
  <? if($mailingstate['abbreviation']==$view_buyer['state']) { echo "selected"; } ?>>
  <?=$mailingstate['state']?>
  </option>
  <? }//while ?>
</select>
<div id="st" class="red-text"></div>
    <div class="clear"></div>
    
    <label class="lableMy">City:<span class="red-text">*</span></label>
    <input name="txt_city" type="text" class="mySearchLog" id="txt_city" value="<?=protect_data($view_buyer['city'])?>">
    <div id="ct" class="red-text"></div>
    <div class="clear"></div>
    
    <label class="lableMy">Zipcode:<span class="red-text">*</span></label>
    <input name="txt_zip" type="text" class="mySearchLog" id="txt_zip" value="<?=protect_data($view_buyer['zip_code'])?>" onKeyPress="return isNumberKey(event);" maxlength="5">
    <div id="zp" class="red-text"></div>
    <div class="clear"></div>
    <label class="lableMy">Phone #:<span class="red-text">*</span></label>
    <input name="txt_contact" type="text" class="mySearchLog" id="txt_contact" value="<?=protect_data($view_buyer['contact_no'])?>" onKeyPress="return isNumberKey(event);" maxlength="10">
    <div id="cn" class="red-text"></div>
    <div class="clear"></div>
     <label class="lableMy">Secondary Phone #:<span class="red-text">*</span></label>
   <input name="txt_contact2" type="text" class="mySearchLog" id="txt_contact2" value="<?=protect_data($view_buyer['secondary_contactno'])?>">
    <div class="clear"></div>
    <div class="clear">
 <!--     <input type="button" onClick="#" name="input" value="SUBMIT" class=" myButt leftSpace">-->
      <input class=" myButt leftSpace" type="submit" value="Save" name="btnsub" id="btnsub" onClick="return add_buyer();">
    </div>
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