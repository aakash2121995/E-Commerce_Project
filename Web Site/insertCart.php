<?php
require "connect.php";
require "session.php";
function CheckProd($id)
{
	$query = "select * from cart2 where product_id = $id";
	$result = mysql_query($query);
	if(mysql_num_rows($result)> 0 )
		return 1;
	else
		return 0;
}
if(isset($_POST['prodID']))
{
	$pid = $_POST['prodID'];
	if(CheckProd($pid))
	{
		$query = "update cart2 set QTY_CART = QTY_CART + 1 where product_id = $pid";
		$result = mysql_query($query);
	}
	else
	{
	$priceQ = "select UnitPrice_PROD from product where ID_PROD = $pid";
	echo $priceQ;
	$subject=mysql_query($priceQ);
	$row = mysql_fetch_row($subject);
	$price = $row[0];
	$query = "insert into cart2 values(1,$pid,'$_SESSION[user]',$price)";
	echo $query;
	$subject=mysql_query($query);
}

}

?>
