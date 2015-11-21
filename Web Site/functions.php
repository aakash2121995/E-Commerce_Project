<?php

require "connect.php";

//getting the categories

function getCats() {
	
	$get_cats = "select * from category";
	$run_cats = mysql_query($get_cats);
	
	while($row_cats = mysql_fetch_row($run_cats)) {
		$cat_id = $row_cats[0];
	    $cat_title = $row_cats[1];
		
	echo "<li><a href='products.php?cat=$cat_id'>$cat_title</a></li>";
	}
}

//getting the brands

// function getBrands() {
// 	global $con;
// 	$get_brands = "select * from brands";
// 	$run_brands = mysqli_query($con,$get_brands);
	
// 	while($row_brands = mysqli_fetch_array($run_brands)) {
// 		$brand_id = $row_brands['brand_id'];
// 	    $brand_title = $row_brands['brand_title'];
		
// 	echo "<li><a href='index1.php?cat=$brand_id'>$brand_title</a></li>";
// 	}
// }

// }



// function getPro() {
// 	if(!isset($_GET['cat'])){
// 	    if(!isset($_GET['brand'])){
	
// 	global $con;
// 	$get_pro = "select * from product order by RAND() LIMIT 0,10";
// 	$run_pro = mysqli_query($con,$get_pro);
	
// 	while($row_pro = mysqli_fetch_array($run_pro)){
// 	$pro_id  = $row_pro['product_id'];
// 	$pro_cat  = $row_pro['product_cat'];
// 	$pro_brand  = $row_pro['product_brand'];
// 	$pro_title  = $row_pro['product_title'];
// 	$pro_price  = $row_pro['product_price'];
// 	$pro_image = $row_pro['product_image'];
	
// 	echo "<div class = 'col-md-4'>
// 	      <div id='single_product'>
// 		    <h3>$pro_title</h3>
// 			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
// 			<p><b>$pro_price</b></p>
			
// 			<a href='navbar.php?pro_id=$pro_id' <button style='float:left'>Details</button></a>
// 			<a href='index1.php?pro_id=$pro_id'> <button style='float:right'>Add To Cart</button></a>
// 		  </div>
// 		  </div>
// 	";
// }
	
// 		}
// 	}		
	
// }


function getCatPro() {
	if(isset($_GET['cat'])){
	$cat_id = $_GET['cat'];
	global $con;
	$get_cat_pro = "select * from product where CATEGORY_ID_CATE ='$cat_id'";
	$run_cat_pro = mysql_query($get_cat_pro);
	$count_cats = mysql_num_rows($run_cat_pro);
	if($count_cats==0){
		echo "No products were found in this category";
	}
	
	while($row_cat_pro = mysql_fetch_row($run_cat_pro)){
	$pro_id  = $row_cat_pro[0];
	$pro_cat  = $row_cat_pro[12];
	//$pro_brand  = $row_cat_pro['product_brand'];
	$pro_title  = $row_cat_pro[1];
	$pro_price  = $row_cat_pro[4];
	// $pro_image = $row_cat_pro['product_image'];
	$pro_image = "";
	
	echo "
	      <div class = 'col-md-3'>
	      <div id='single_product'>
		    <h3>$pro_title</h3>
			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
			<p><b>$pro_price</b></p>
			<button id='$pro_id' class='btn btn-warning btn-md' <a href='navbar.php'>Add to Cart</a></button>
            <button class='btn btn-primary btn-md' <a href='navbar.php?pro_id=$pro_id'>Details</a></button>
			 
		  </div>
		  </div>
	";
}
	
	}
	
}

function SearchQuery(){
if(isset($_GET['user_query'])){
   $search_query = $_GET['user_query'];

	$get_pro = "select * from product where PROD_KEYWORDS like '%$search_query%'";
	//echo $get_pro;
	$run_cat_pro = mysql_query($get_pro);
	$count_cats = mysql_num_rows($run_cat_pro);

	if($count_cats==0){
		echo "No products were found in this category";
	}
	
	while($row_cat_pro = mysql_fetch_row($run_cat_pro)){
	$pro_id  = $row_cat_pro[0];
	$pro_cat  = $row_cat_pro[12];
	//$pro_brand  = $row_cat_pro['product_brand'];
	$pro_title  = $row_cat_pro[1];
	$pro_price  = $row_cat_pro[4];
	// $pro_image = $row_cat_pro['product_image'];
	$pro_image = "";
	
	echo "
	      <div class = 'col-md-3'>
	      <div id='single_product'>
		    <h3>$pro_title</h3>
			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
			<p><b>$pro_price</b></p>
			<button id='$pro_id' class='btn btn-warning btn-md' <a href='navbar.php'>Add to Cart</a></button>
            <button class='btn btn-primary btn-md' <a href='navbar.php?pro_id=$pro_id'>Details</a></button>
			 
		  </div>
		  </div>
	";
	
}
}
}



// function getBrandPro() {
// 	if(isset($_GET['brand'])){
// 	$brand_id = $_GET['brand'];
// 	global $con;
// 	$get_brand_pro = "select * from product where product_brand='$brand_id'";
// 	$run_brand_pro = mysqli_query($con,$get_brand_pro);
// 	$count_brands = mysqli_num_rows($run_brand_pro);
// 	if($count_brands==0){
// 		echo "No products were found for this brand";
// 	}
	
// 	while($row_brand_pro = mysqli_fetch_array($run_brand_pro)){
// 	$pro_id  = $row_brand_pro['product_id'];
// 	//$pro_cat  = $row_brand_pro['product_cat'];
// 	//$pro_brand  = $row_brand_pro['product_brand'];
// 	$pro_title  = $row_brand_pro['product_title'];
// 	$pro_price  = $row_brand_pro['product_price'];
// 	$pro_image = $row_brand_pro['product_image'];
	
// 	echo "
// 	      <div class = 'col-md-4'>
// 	      <div id='single_product'>
// 		    <h3>$pro_title</h3>
// 			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
// 			<p><b>$pro_price</b></p>
			
// 			<a href='navbar.php?pro_id=$pro_id' <button style='float:left'>Details</button></a>
// 			<a href='index1.php?pro_id=$pro_id'> <button style='float:right'>Add To Cart</button></a>
// 		  </div>
// 		  </div>
// 	";
// }
	
// 	}
	
// }
?>