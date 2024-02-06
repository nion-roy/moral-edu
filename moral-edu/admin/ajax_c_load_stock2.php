<?php
    require_once 'session.php';	 
	$out =  new stdClass();
	if(!isset($_GET['c']) || $_GET['c'] == "")
	{
		$out->status = "Not Found";
	}

	
	else{
		
		$productID = mysqli_real_escape_string($con, $_GET['c']);
		$userID = mysqli_real_escape_string($con, $_GET['u']);
		$product = mysqli_query($con,"select * from product_depo  
		WHERE product_depo.user_id ='$userID'  and product_depo.product_id = '$productID' and product_depo.status=1   ");
		
		if(mysqli_num_rows($product) < 1)
		{
			$out->status = "Not Found";
		}
		else{
			$product = mysqli_fetch_assoc($product);
			$out->status = 'Found';
			$out->ProdId = $product['product_id'];
			$out->productName = $product['product_name'];
			$out->brandId = $product['brand_id'];
			$out->categoriesId = $product['categories_id'];
			$out->productQty = $product['quantity'];
			$out->saleRate = $product['rate'];
			$out->RetailRate = $product['retail_rate'];
			$out->totalSaleRate = $product['total_rate'];
			$out->buyRate = $product['buy_rate'];
			$out->totalBuyRate = $product['total_buy_rate'];
		}
	}

	echo json_encode($out);
?>

