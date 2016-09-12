<?
ob_start();
session_start();
include("includes/classes/db.php");
include("includes/comman_function.php");
//echo "Session ID==>>".$_SESSION["user_id"];
if($_SESSION["user_id"]=="" or $_SESSION["user_id"]==0)
{
	echo '<script language="javascript" type="text/javascript">window.location = "index.php"</script>';
}
?>