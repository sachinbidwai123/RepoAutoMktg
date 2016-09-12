<?
include('session_validation.php');
$userid=$_SESSION["user_id"];
	if($_GET['msgid']!="")
	{
			$msg_result = mysql_query("select id,from_id,to_id,from_type,to_type,message,flag_read,msg_date from message_system where id='".protect_data($_GET['msgid'])."'");
	$cnt=mysql_num_fields($msg_result);
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
<span class="inboxTitle">View Details</span>
<div class="clear"></div>
</div>
<div class="smsDetailOut">
<ul class="dateRow smsInnBox">
	<li class="bottBor">
    <p class="sender blueTextHead">Sender</p>
    <p class="smsText blueTextHead"> Message Details </p>
    <p class="date blueTextHead"> Date/Time </p>
    <div class="clear"></div>
    </li>
    <?
	if($cnt>0)
	{
		while($row_message=mysql_fetch_array($msg_result))
		{
	?>
    <?
		if(protect_data($row_message['from_type'])=='Private')
		{
			$name_dealer = mysql_fetch_array(mysql_query("select fname,lname from car_buyers where user_id='".protect_data($row_message['from_id'])."'"));	
			
			$frmname=$name_dealer['fname']." ".$name_dealer['lname'];
		}
		elseif(protect_data($row_message['from_type'])=='Dealer')
		{
			 $name_dealer = mysql_fetch_array(mysql_query("select dealer_business_name from car_dealership where user_id='".protect_data($row_message['from_id'])."'"));
			 $frmname=$name_dealer['dealer_business_name'];
		}
		else
		{
			$frmname='Administrator';
		}
		?>
    <li>
    <p class="sender">(<?=$frmname?>) </p>
    <p class="smsText"><?=$row_message['message']?></p>
    <p class="date"><?=date('d M Y',strtotime($row_message['msg_date']))?><br><?=date('h:i:s A',strtotime($row_message['msg_date']))?></p>
    <div class="clear"></div>
    </li>
    <?
		}//end while
	}//end if
	?>
    <!--<li>
    <p class="sender">( Administrator )</p>
    <p class="smsText"> Lorem Ipsum is simply dummy text of the printing..</p>
    <p class="date"> 14 October 2014 <br> 12:38:53 PM  </p>
    <div class="clear"></div>
    </li>
    <li>
    <p class="sender">( Administrator )</p>
    <p class="smsText"> Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
    <p class="date"> 14 October 2014 <br> 12:38:53 PM  </p>
    <div class="clear"></div>
    </li>
    
    <li>
    <p class="sender">( Administrator )</p>
    <p class="smsText">Lorem Ipsum is simply dummy text of the printing and typesetting..</p>
    <p class="date"> 14 October 2014 <br> 12:38:53 PM  </p>
    <div class="clear"></div>
    </li>
    
    <li>
    <p class="sender">( Administrator )</p>
    <p class="smsText"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee</p>
    <p class="date"> 14 October 2014 <br> 12:38:53 PM  </p>
    <div class="clear"></div>
    </li>-->
    
</ul>
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