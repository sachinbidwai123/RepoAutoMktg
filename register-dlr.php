<?
/*  Developed By: Supra Int.
    Modify Date: 30-March-2015
    Section: login page for redwood 
    Description: login page 
*/	
ob_start();
session_start();
include("includes/classes/db.php");
include("includes/comman_function.php");
include("settings.php");
if(isset($_POST['btnsub']))
{
	$encrypt_pass=md5_encrypt(mysql_real_escape_string(protect_data($_POST['txt_password'])),$encryption_password);
	//To check dealer user email id or Username is already exist.
		$ckemail=mysql_query("select user_email from car_usermaster where user_email='".protect_data($_POST['txt_email'])."'");
	$ckuname=mysql_query("select user_login from car_usermaster where user_login='".protect_data($_POST['txt_user_nm'])."'");
	
	 //To check private user email id or Username is already exist.
		if(($ckemail and mysql_num_rows($ckemail)==0) && $ckuname and mysql_num_rows($ckuname)==0)
		{
			
			if(protect_data($_POST['txtcaptchacode'])!="")
				{
					if($_SESSION['captcha']==protect_data($_POST['txtcaptchacode']))
					{
		//=====insert into login table
				mysql_query("INSERT INTO `car_usermaster`(`user_email`, `user_login`, `user_pass`, `user_type`, `account_type`, `status`, `created_date`) VALUES ('".protect_data($_POST['txt_email'])."','".protect_data($_POST['txt_user_nm'])."','".$encrypt_pass."','Dealer','','1','".date('Y-m-d H:i:s')."')");
	$insert_id = mysql_insert_id();		
	//To insert dealership user record into car_dealership.
	$rsult=mysql_query("INSERT INTO car_dealership(dealer_business_name,business_type,dealer_mailing_add, dealer_mailing_city,dealer_mailing_state,dealer_mailing_zip,dealer_location_add,dealer_location_city, dealer_location_state,dealer_location_zip,location_years,dealer_state_license,dealer_tax_id, dealer_contact_no,dealer_fax_no,dealer_email_id,primary_owner_fname,primary_owner_lname,service_manager_name, service_manager_contact, service_manager_email,username,password, status, cretead_date, user_id) 
	VALUES ('".protect_data($_POST['txt_dealer_name'])."', '".protect_data($_POST['selbusinesstype'])."', '".protect_data($_POST['txt_dealer_mailingaddress'])."', '".protect_data($_POST['txt_dealer_mailingcity'])."', '".protect_data($_POST['seldealer_mailingstate'])."','".protect_data($_POST['txt_dealer_mailingzip'])."','".protect_data($_POST['txt_dealer_locationadd'])."','".protect_data($_POST['txt_dealer_locationcity'])."','".protect_data($_POST['seldealer_locationstate'])."','".protect_data($_POST['txt_dealer_locationzip'])."','".protect_data($_POST['txt_dealer_locationyears'])."','".protect_data($_POST['txt_dealer_statelice'])."','".protect_data($_POST['txt_dealer_taxid'])."','".protect_data($_POST['txt_dealer_contact'])."','".protect_data($_POST['txt_dealer_fax'])."','".protect_data($_POST['txt_email'])."','".protect_data($_POST['txt_primary_ownnm'])."','".protect_data($_POST['txt_primary_ownlnm'])."','".protect_data($_POST['txt_servicemanager_nm'])."','".protect_data($_POST['txt_servicemanager_contact'])."','".protect_data($_POST['txt_servicemanager_email'])."','".protect_data($_POST['txt_user_nm'])."','".$encrypt_pass."','1','".date('Y-m-d H:i:s')."','".$insert_id."')");
					//============Send email to user===============
					$businessnm=protect_data($_POST['txt_dealer_name']);
					$business_type=protect_data($_POST['selbusinesstype']);
				 	$business_emailid=protect_data($_POST['txt_email']);
					$business_phno=protect_data($_POST['txt_dealer_contact']);
					$usernm=protect_data($_POST['txt_user_nm']);
					$passwd=protect_data($_POST['txt_password']);
					include("email/register-dlr-email.php"); 
				 //=============================================
echo '<script language="javascript" type="application/javascript">window.location.href ="login.php"</script>';
					}
					else
					{
	    				 $errmsg11 = "Please enter valid security code.";
					}
				}
				else
				{
					 $errmsg11 = "Please enter security code.";	
				}
		}//if
		 
		//To check dealership user email id or Username is already exist.
		if(mysql_num_rows($ckemail) > 0)
		{ 
			$errormsg="Email Id is already exists";
		}//if
		else if(mysql_num_rows($ckuname)>0)
		{
			$errormsg="Username is already exists";
		}//elseif
}//if
//===messages
if(protect_data($_GET['flag'])=='added')
{
	$errormsg= "Dealer added successfully..";	
}

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
<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
<? include('header.php');?>
<form action="" method="post" name="addsellerfrm" id="addsellerfrm" >
<input type="hidden" name="flag" value="updateflag" />
<div id="body" class="logBody">
<div class="contain">
<p class="SubHead"> Dealership account Register Here </p>
<div id="whiteBoxLogin1">
<div align="center" class="red-text">
 <?=$errormsg?>
</div>
  <div id="privAcc">
    <div class="commonBoxLog">
<div class="pvtOutBox">
    <label class="lableMy">Dealership business name:<span class="red-text">*</span></label>
    <input name="txt_dealer_name" type="text" class="mySearchLog" id="txt_dealer_name" value="<?=protect_data($_POST['txt_dealer_name'])?>"><div id="error_dbn" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Business type:<span class="red-text">*</span></label>
    <select name="selbusinesstype" id="selbusinesstype" class="mySearchLog">
               <option value="">-Select-</option>
               <option value="Corp" <? if($_POST['selbusinesstype']=='Corp'){ echo 'selected';}?>>Corp</option>
               <option value="Partnership" <? if($_POST['selbusinesstype']=='Partnership'){ echo 'selected';}?>>Partnership</option>
               <option value="llc. Inc" <? if($_POST['selbusinesstype']=='llc. Inc'){ echo 'selected';}?>>llc. Inc</option>
               <option value="Sole proprietor" <? if($_POST['selbusinesstype']=='Sole proprietor'){ echo 'selected';}?>>Sole proprietor</option>
      </select><div id="error_bt" class="red-text"></div>
    <div class="clear"></div>
    </div>
    
    <div class="clear"></div>
    <p class="accHead">Dealership mailing address </p> 
    <div class="clear"></div>
    <div class="pvtAdd">
    <label class="lableMy">Address:<span class="red-text">*</span></label>
    <textarea name="txt_dealer_mailingaddress" type="text" class="mySearchLog" id="txt_dealer_mailingaddress"><?=protect_data($_POST['txt_dealer_mailingaddress'])?></textarea><div id="error_dma" class="red-text"></div>
    <div class="clear"></div>
    </div>
      <div class="clear"></div>
    <div class="pvtAdd">
    <label class="lableMy">City:<span class="red-text">*</span></label>
    <input name="txt_dealer_mailingcity" type="text" class="mySearchLog" id="txt_dealer_mailingcity" value="<?=protect_data($_POST['txt_dealer_mailingcity'])?>"><div id="error_c" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtAdd">
    <label class="lableMy">State:<span class="red-text">*</span></label>
     <? $rwstate=mysql_query("SELECT stateid,abbreviation,state FROM usa_state" ); ?>
<select name="seldealer_mailingstate" id="seldealer_mailingstate" class="mySearchLog" onChange="getzipcode(this.value)">
  <option value="">-Select-</option>
  <? while($mailingstate=mysql_fetch_array($rwstate)){ ?>
  <option value="<?=$mailingstate['abbreviation']?>" <? if($_POST['seldealer_mailingstate']==$mailingstate['abbreviation']){ echo 'selected';}?>>
  <?=$mailingstate['state']?>
  </option>
  <? }//while ?>
</select><div id="error_s" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtAdd">
    <label class="lableMy">Zip code:<span class="red-text">*</span></label>
    <input name="txt_dealer_mailingzip" type="text" class="mySearchLog" id="txt_dealer_mailingzip" value="<?=protect_data($_POST['txt_dealer_mailingzip'])?>" onKeyPress="return isNumberKey(event);" maxlength="5">
    <div id="error_zip" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <p class="accHead">Dealership location address </p> 
    <div class="clear">
    <div class="pvtAdd">
    <label class="lableMy">Address:</label>
    <textarea name="txt_dealer_locationadd" type="text" class="mySearchLog" id="txt_dealer_locationadd"><?=protect_data($_POST['txt_dealer_locationadd'])?></textarea>
    <div class="clear"></div>
    </div>
    </div>
     <div class="clear"></div>
    <div class="pvtAdd">
    <label class="lableMy">City:</label>
    <input name="txt_dealer_locationcity" type="text" class="mySearchLog" id="txt_dealer_locationcity" value="<?=protect_data($_POST['txt_dealer_locationcity'])?>">
    <div class="clear"></div>
    </div>
    <div class="pvtAdd">
    <label class="lableMy">State</label>
    <? $rwstate=mysql_query("SELECT stateid,abbreviation,state FROM usa_state" ); ?>
<select name="seldealer_locationstate" id="seldealer_locationstate" class="mySearchLog" onChange="getzipcode(this.value)">
  <option value="">-Select-</option>
  <? while($mailingstate=mysql_fetch_array($rwstate)){ ?>
  <option value="<?=$mailingstate['abbreviation']?>" <? if($_POST['seldealer_locationstate']==$mailingstate['abbreviation']){ echo 'selected';}?>>
  <?=$mailingstate['state']?>
  </option>
  <? }//while ?>
</select>
    <div class="clear"></div>
    </div>
    <div class="pvtAdd">
    <label class="lableMy">Zip code:</label>
    <input name="txt_dealer_locationzip" type="text" class="mySearchLog" id="txt_dealer_locationzip" value="<?=protect_data($_POST['txt_dealer_locationzip'])?>" onKeyPress="return isNumberKey(event);" maxlength="5">
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="pvtOutBox">
    <label class="lableMy"> How many years in that location:</label>
    <input name="txt_dealer_locationyears" type="text" class="mySearchLog" id="txt_dealer_locationyears" value="<?=protect_data($_POST['txt_dealer_locationyears'])?>"  onKeyPress="return isNumberKey(event);" maxlength="10" >
    <div class="clear"></div>
    </div>
    <!--<div class="pvtOutBox">
    <label class="lableMy">Dealership other location address:</label>
    <input type="text" placeholder="Dealership other location address" class="mySearchLog" id="" name="">
    <div class="clear"></div>
    </div>-->
 
    <div class="pvtOutBox">
    <label class="lableMy">Dealership state license #:</label>
    <input name="txt_dealer_statelice" type="text" class="mySearchLog" id="txt_dealer_statelice" value="<?=protect_data($_POST['txt_dealer_statelice'])?>" maxlength="10">
    <div class="clear"></div>
    </div>
      
    <div class="pvtOutBox">
    <label class="lableMy">Tax identiﬁcation number:</label>
    <input name="txt_dealer_taxid" type="text" class="mySearchLog" id="txt_dealer_taxid" value="<?=protect_data($_POST['txt_dealer_taxid'])?>" maxlength="10">
    <div class="clear"></div>
    </div>
  
    <div class="pvtOutBox">
    <label class="lableMy">Dealership phone number:<span class="red-text">*</span></label>
    <input name="txt_dealer_contact" type="text" class="mySearchLog" id="txt_dealer_contact" value="<?=protect_data($_POST['txt_dealer_contact'])?>"  onKeyPress="return isNumberKey(event);" maxlength="10"><div id="error_dealphone" class="red-text"></div>
    <div class="clear"></div>
    </div>
       
    <div class="pvtOutBox">
    <label class="lableMy">Dealership fax number:</label>
    <input name="txt_dealer_fax" type="text" class="mySearchLog" id="txt_dealer_fax" value="<?=protect_data($_POST['txt_dealer_fax'])?>"  onKeyPress="return isNumberKey(event);" maxlength="10">
    <div class="clear"></div>
    </div>
    
    <div class="pvtOutBox">
    <label class="lableMy">Dealership email address:<span class="red-text">*</span></label>
    <input name="txt_email" type="text" class="mySearchLog" id="txt_email" value="<?=protect_data($_POST['txt_email'])?>"><div id="error_email" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <p class="accHead">Primary owners</p> 
    <div class="clear"></div>
    <div class="pvtOutBox">
    <label class="lableMy"> First name:</label>
    <input name="txt_primary_ownnm" type="text" class="mySearchLog" id="txt_primary_ownnm" value="<?=protect_data($_POST['txt_primary_ownnm'])?>">
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Last name:</label>
    <input name="txt_primary_ownlnm" type="text" class="mySearchLog" id="txt_primary_ownlnm" value="<?=protect_data($_POST['txt_primary_ownlnm'])?>">
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <p class="accHead">Service/sale manager</p> 
    <div class="clear"></div>
    
    
    <div class="pvtOutBox">
    <label class="lableMy">Name:</label>
    <input name="txt_servicemanager_nm" type="text" class="mySearchLog" id="txt_servicemanager_nm" value="<?=protect_data($_POST['txt_servicemanager_nm'])?>">
    <div class="clear"></div>
    </div>
    
    
    <div class="pvtOutBox">
    <label class="lableMy">Phone number:</label>
    <input name="txt_servicemanager_contact" type="text" class="mySearchLog" id="txt_servicemanager_contact" value="<?=protect_data($_POST['txt_servicemanager_contact'])?>">
    <div class="clear"></div>
    </div>
    
    
    <div class="pvtOutBox">
    <label class="lableMy">Email address:</label>
    <input name="txt_servicemanager_email" type="text" class="mySearchLog" id="txt_servicemanager_email" value="<?=protect_data($_POST['txt_servicemanager_email'])?>">
    <div class="clear"></div>
    </div>
     <div class="clear"></div>
    <div class="pvtOutBox">
    <label class="lableMy">Username:<span class="red-text">*</span></label>
    <input name="txt_user_nm" type="text" class="mySearchLog" id="txt_user_nm" value="<?=protect_data($_POST['txt_user_nm'])?>"><div id="error_uname" class="red-text"></div>
    <div class="clear"></div>
    </div>
    <div class="pvtOutBox">
    <label class="lableMy">Password:<span class="red-text">*</span></label>
   <input name="txt_password" type="password" class="mySearchLog" id="txt_password" value="<?=protect_data($_POST['txt_password'])?>"><div id="error_pw" class="red-text"></div>
    <div class="clear"></div>
    </div>
     <div class="clear"></div>
     <div class="pvtOutBox">
    <label class="lableMy">Confirm Password:<span class="red-text">*</span></label>
   <input name="ctxt_password" type="password" class="mySearchLog" id="ctxt_password" value="<?=protect_data($_POST['ctxt_password'])?>"><div id="cerror_pw" class="red-text"></div>
    <div class="clear"></div>
    </div>
     <div class="pvtOutBox">
     <div class="captureImg"><img src="captcha.php" alt="captcha image" width="60" height="30" align="absmiddle" style=" margin-bottom:5px;" /></div>
     <div class="captureFild">
     <input name="txtcaptchacode" type="text" id="txtcaptchacode"  class="mySearchLog capTextBox" value="" maxlength="3" />
              <div id="captchamsg" class="red-text">
                <?=$errmsg11?>
              </div>
     </div>
     <div class="clear"></div>
     </div>
    <div class="clear"></div>
    <!--<input type="button" onclick="location.href='#';" name="" value="Creat an account" class=" myButt acc">-->
    <input class="myButt acc" type="submit" value="Creat an account" name="btnsub" id="btnsub" onClick="return add_seller();">
    </div>
</div>
<div class="clear"></div>
</div>
</div>
</div>
</form>
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