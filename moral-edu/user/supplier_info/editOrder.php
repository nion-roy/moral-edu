<?php  session_start();
require_once '../../includes/conn.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$orderId = $_POST['orderId'];
	$UserId 					= $_POST['UserId'];
  $CustId 					= $_POST['CustId'];

  $orderDate 					= date('Y-m-d', strtotime($_POST['orderDate']));
  $clientName 					= $_POST['clientName'];
  $clientContact 				= $_POST['clientContact'];
  $Address 				= $_POST['Address'];
  $subTotalValue 				= $_POST['subTotalValue'];
  $vatValue 						=	$_POST['vatValue'];
  $totalAmountValue     = $_POST['totalAmountValue'];
  $discount 						= $_POST['discount'];
  $grandTotalValue 			= $_POST['grandTotalValue'];
  
  $paid 								= $_POST['paid'];
  $Paid_dd 								= $_POST['Paid_dd'];
    
  $PreDue 				        = $_POST['PreDue'];
  $GTotal 						= $_POST['GTotal'];
  $RecDues 						= $_POST['RecDues'];
  
  $paymentType 					= $_POST['paymentType'];
  $paymentStatus 				= $_POST['paymentStatus'];

				
	$sql = "UPDATE sup_orders SET deliver_date_or_last_update = NOW(), client_name = '$clientName', client_contact = '$clientContact',address= '$Address', sub_total = '$subTotalValue', vat = '$vatValue', total_amount = '$totalAmountValue', discount = '$discount', pre_due = '$PreDue', today_total = '$grandTotalValue', grand_total = '$GTotal', paid = '$paid', deliver_date_paid = '$Paid_dd', due = '$RecDues', payment_type = '$paymentType', payment_status = '$paymentStatus', order_status = 1 WHERE order_id = {$orderId}";	
	//$sql = "UPDATE orders_dues SET order_date = '$orderDate', client_name = '$clientName', client_contact = '$clientContact', sub_total = '$subTotalValue', vat = '$vatValue', total_amount = '$totalAmountValue', discount = '$discount', pre_due = '$PreDue', today_total = '$grandTotalValue', grand_total = '$GTotal', paid = '$paid',deliver_date_paid = '$Paid_dd', recent_due = '$RecDues',  WHERE order_id = {$orderId}";	
	$con->query($sql);
	
	$sql1 = "UPDATE sup_orders_dues SET  order_date ='$orderDate',last_update = NOW(), pre_due = '$PreDue', today_total = '$grandTotalValue', grand_total = '$GTotal', paid = '$paid', recent_due = '$RecDues', cuses='Invoice Update'  WHERE order_id = {$orderId}";	
	$con->query($sql1);
	
	mysqli_query($con,"INSERT INTO sup_orders_details (order_id,user_id,sup_id,order_date, client_name, client_contact,address pre_due,today_total, grand_total, paid,invoice_date_paid, deliver_date_paid, recent_due,cuses) 
	VALUES ('$orderId','$UserId','$CustId','$orderDate', '$clientName', '$clientContact','$Address','$PreDue','$grandTotalValue', '$GTotal',0,0,'$Paid_dd', '$RecDues','Invoice Update')" );
  	
	$readyToUpdateOrderItem = false;
	// add the quantity from the order item to product table
	for($x = 0; $x < count($_POST['productName']); $x++) {		
		//  product table
		$updateProductQuantitySql = "SELECT product.quantity FROM product WHERE product.user_id='".$_SESSION['id']."' and product.product_id = ".$_POST['productName'][$x]."";
		$updateProductQuantityData = $con->query($updateProductQuantitySql);			
			
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			// order item table add product quantity
			$orderItemTableSql = "SELECT order_item.quantity FROM order_item WHERE order_item.order_id = {$orderId}";
			$orderItemResult = $con->query($orderItemTableSql);
			$orderItemData = $orderItemResult->fetch_row();

			$editQuantity = $updateProductQuantityResult[0] + $orderItemData[0];							

			//$updateQuantitySql = "UPDATE product SET quantity = $editQuantity WHERE user_id='".$_SESSION['id']."' and product_id = ".$_POST['productName'][$x]."";
			$con->query($updateQuantitySql);		
		} // while	
		
		if(count($_POST['productName']) == count($_POST['productName'])) {
			$readyToUpdateOrderItem = true;			
		}
	} // /for quantity

	// remove the order item data from order item table
	for($x = 0; $x < count($_POST['productName']); $x++) {			
		$removeOrderSql = "DELETE FROM sup_order_item WHERE order_id = {$orderId}";
		$con->query($removeOrderSql);	
	} // /for quantity

	if($readyToUpdateOrderItem) {
			// insert the order item data 
		for($x = 0; $x < count($_POST['productName']); $x++) {			
			$updateProductQuantitySql = "SELECT product.quantity FROM product WHERE product.user_id='".$_SESSION['id']."' and product.product_id = ".$_POST['productName'][$x]."";
			$updateProductQuantityData = $con->query($updateProductQuantitySql);
			
			while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
				$updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantity'][$x];							
					// update product table
					//$updateProductTable = "UPDATE product SET quantity = '".$updateQuantity[$x]."' WHERE user_id='".$_SESSION['id']."' and product_id = ".$_POST['productName'][$x]."";
					$con->query($updateProductTable);

					// add into sup_order_item
				$orderItemSql = "INSERT INTO sup_order_item (order_id, product_id, quantity, rate, total,short_details, order_item_status,entry_date) 
				VALUES ({$orderId}, '".$_POST['productName'][$x]."', '".$_POST['quantity'][$x]."', '".$_POST['rate'][$x]."', '".$_POST['totalValue'][$x]."','".$_POST['ShortDetails'][$x]."',1,'$orderDate')";
				
				$con->query($orderItemSql);		
			} // while	
		} // /for quantity
	}

	

	$valid['success'] = true;
	$valid['messages'] = "Invoice Update Successful...";		
	
	$con->close();

	echo json_encode($valid);
 
} // /if $_POST
// echo json_encode($valid);

?>