<header>
<div class="contain">
<div class="logoMain"><a href="index.php"><img src="images/logo.png" width="236" height="47" alt="logo" ></a></div>
<div class="logoRight">
<div class="searchBx">
<input name="" type="text" class="textField" value="Input your Search">
</div>
<div class="searchBt"><a href="#">Search </a></div>
</div>

<div class="topLinkRight deviceMy">
  <a href="#"><img src="images/cart-blk.png" width="24" height="18" alt="img"></a>
  <a href="#" class="linkTop"><img src="images/massage.png" width="22" height="14" alt="img"></a>
  </div>

<div class="clear"></div>
</div>
<div class="navMain">
<div id="top">
<div class="contain">
<div class="topLinkLeft">
<? 
$uname=$_SESSION["user_login"];
if($uname!="")
{
	echo "Welcome(".$_SESSION["user_login"].")";
}
else
{
	echo "Welcome";
}
?>
<a href="new-list.php">Newly listed</a>
<a href="#">Hot deals</a>
<a href="most-viewd.php">Most viewed</a>
<a href="month-sale.php">On sale this month</a>
<a href="coupons.php">Coupons </a>
<a href="#">Sell your car</a>
<a href="#">Sell car parts</a>
<a href="auction.php">Auctions</a>
<a href="mk-money.php">Make money</a>
<!--<a href="login.php">Sign in/out</a>-->
<? 
$uname=$_SESSION["user_login"];
if($uname=="")
{
	echo "<a href='login.php'>Sign in</a>";
}
else
{
	echo "<a href='logout.php'>Sign out</a>";
}
?>
<a href="investors-login.php">Investors log in</a>
<a href="contact.php">Contact us</a>
</div>
<div class="topLinkRight">
  <a href="#"><img src="images/cart-blk.png" alt="img" width="24" height="18"></a>
  <a href="#" class="linkTop"><img src="images/massage.png" alt="img" width="22" height="14"></a>
  </div>
<div class="clear"></div>
</div>
</div>
<div class="containNav">
	<nav class="clearfix">
		<ul class="clearfix">
        <li class="navLeft">
        <div id="topInn">
<div class="contain fullInnNav">
<div class="topLinkLeft">
<span class="welcome"> Welcome(user)</span>
<a href="new-list.php">Newly listed</a>
<a href="#">Hot deals</a>
<a href="most-viewd.php">Most viewed</a>
<a href="month-sale.php">On sale this month</a>
<a href="coupons.php">Coupons </a>
<a href="#">Sell your car</a>
<a href="#">Sell car parts</a>
<a href="auction.php">Auctions</a>
<a href="mk-money.php">Make money</a>
<!--<a href="login.php">Sign in/out</a>-->
<? 
$uname=$_SESSION["user_login"];
if($uname=="")
{
	echo "<a href='login.php'>Sign in</a>";
}
else
{
	echo "<a href='logout.php'>Sign out</a>";
}
?>
<a href="investors-login.php">Investors log in</a>
<a href="contact.php">Contact us</a>
</div>
</div>
</div>
        </li>
			<li class="navRight">
            <ul>
            <li class="myNav"><a href="#" id="showDrop">Buy a car</a>
            <div class="dropBox">
            	<ul>
                	<li><a href="subnew-car.php">New cars</a></li>
                    <li><a href="subown-car.php">Pre-owned cars</a></li>
                    <li><a href="subuse-car.php">Used cars</a></li>
                    <li><a href="subrepairablr-car.php">Repairable cars</a></li>
                </ul>
            </div>
            
            </li>
            <li class="myNav"><a href="lease-car.php">Lease a work car</a> </li>
            <li class="myNav"><a href="#" id="showPart">Parts for sale</a> 
            <div class="dropBoxPart">
            	<ul>
                	<li><a href="car-truck-part.php">Car and truck parts</a></li>
                    <li><a href="commercial-veh-part.php">Commercial vehicle parts</a></li>
                </ul>
            </div>
            </li>
            <li class="myNav"><a href="#">Commercial vehicles</a> </li>	
            <li class="myNav"><a href="#">Dealers inventory</a></li>
            <li class="myNav"><a href="#">Cash now</a></li>
            <li class="myNav"><a href="repair-club.php">Auto repair club</a></li>
            <li class="myNav"><a href="auto-investment.php">Auto investment</a></li>
            <li class="myNav hideTt"> <a href="#">&nbsp;</a> </li>
            <div class="clear"></div>
            </ul>
            </li>
		</ul>
		<a href="#" id="pull"></a>
	</nav>
</div>
</div>

</header>
    <script>
    	$(document).ready(function(){
			$('#showDrop').click(function(event){
				event.stopPropagation();
				$(".dropBox").show();
			});
			$(document).click(function(){
				$(".dropBox").hide();	
			});
			
			$('#showPart').click(function(event){
				event.stopPropagation();
				$(".dropBoxPart").show();
			});
			$(document).click(function(){
				$(".dropBoxPart").hide();	
			});
		});
    </script>