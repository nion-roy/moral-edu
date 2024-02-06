<?php 	
session_start();
require_once '../../includes/conn.php'; 

$sql = "SELECT order_id,user_id,order_date, client_name, client_contact, payment_status,pre_due,today_total,grand_total, payment_status,custom_invoice_no FROM orders WHERE order_status = 1  and user_id ='".$_SESSION['id']."' order by order_id desc ";
$result = $con->query($sql);


$output = array('data' => array());

if($result->num_rows > 0) { 
 
 $paymentStatus = ""; 
 $x = 1;

 while($row = $result->fetch_array()) {
 	$orderId = $row[0];

 	$countOrderItemSql = "SELECT count(*) FROM order_item WHERE order_id = $orderId";
 	$itemCountResult = $con->query($countOrderItemSql);
 	$itemCountRow = $itemCountResult->fetch_row();


 		// active 
 	if($row[5] == 1) { 		
 		$paymentStatus = "<label class='label label-success'>Full Payment</label>";
 	   } 
else if($row[5] == 2) { 		
 		$paymentStatus = "<label class='label label-info'>Advance Payment</label>";
 	} 
else if($row[5] == 3) { 		
 		$paymentStatus = "<label class='label label-primary'>Half Payment</label>";
 	}	
else if($row[5] == 4) { 		
 		$paymentStatus = "<label class='label label-default'>Some Payment</label>";
 	}	
	
	
else { 		
 		$paymentStatus = "<label class='label label-danger'>No Payment</label>";
 	} // /else
		

 	$button = '<!-- Single button -->
	<nav class="header-nav ms-auto">
<ul class="d-flex align-items-center">
<li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Click</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile rounded">
            

            <li>
              <a href="#" class="dropdown-item d-flex align-items-center" onclick="printOrder('.$orderId.')">
                <i class="bi bi-printer"></i>
                <span>Print</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="orders-new?o=editOrd&i='.$orderId.'" >
                <i class="bi bi-pencil-square"></i>
                <span>Edit</span>
              </a>
            </li>

          </ul> 
        </li> 
		
		
		 </ul>
    </nav>
	
	
	
	<div class="btn-group d-none">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    
	    <li><a type="button" onclick="printOrder('.$orderId.')"> <i class="glyphicon glyphicon-eye-open"></i> View </a></li>
	    <li><a href="orders.php?o=editOrd&i='.$orderId.'" id="editOrderModalBtn"> <i class="glyphicon glyphicon-edit"></i> Edit </a></li>
    <!-- 
	<li><a type="button" onclick="printOrderWithBlank('.$orderId.')"> <i class="glyphicon glyphicon-eye-open"></i> Blank </a></li>
	    <li><a type="button" onclick="printOrderWithPreDue('.$orderId.')"> <i class="glyphicon glyphicon-eye-open"></i> View Pre Due</a></li>
	 	
		
  <li><a type="button" data-toggle="modal" id="paymentOrderModalBtn" data-target="#paymentOrderModal" onclick="paymentOrder('.$orderId.')"> <i class="glyphicon glyphicon-save"></i> Payment</a></li>
        <li><a type="button" data-toggle="modal" data-target="#removeOrderModal" id="removeOrderModalBtn" onclick="removeOrder('.$orderId.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li> 
	 -->      
	  </ul>
	</div>';		

 	$output['data'][] = array( 		
 		// image
 		//$x,
		// order Id
 		$row[10],
 		// order date
 		//$row[1],
 		// client name
 		date("d-m-Y ", strtotime($row[2])),
 		// client contact
 		$row[3], 
// client contact
 		$row[4],
		
	$row[6],	
 		$itemCountRow, 	
$row[7],	 	
$row[8],	 	
 		$paymentStatus,
 		// button
 		$button 		
 		); 	
 	$x++;
 } // /while 

}// if num_rows

$con->close();

echo json_encode($output);

?>