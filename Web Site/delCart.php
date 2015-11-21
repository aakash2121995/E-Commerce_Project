<?php
if(isset($_POST['dprodID']))
{
	require "connect.php";
	require "session.php";
	$pid = $_POST['dprodID'];
	
	$query = "delete from cart2 where PRODUCT_ID = $pid and CUSTOMER_USERNAME = '$_SESSION[user]'";
	echo $query;
	$subject=mysql_query($query);

}
else
	echo "bitch";
?>
