<?
/*  Developed By: Supra Int.
    Modify Date: 16-May-2015
    Section: setting page  
    Description: setting page */
$result=mysql_fetch_array(mysql_query("select email_id from admin_table where user_type='Administrator'"));
$adminemail=$result['email_id'];
?>