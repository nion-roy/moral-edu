
<?php  
require_once 'header.php'; 

if($_GET['o'] == 'add') { 
// add order
	echo "<div class='div-request div-hide'>add</div>";
} else if($_GET['o'] == 'manord') { 
	echo "<div class='div-request div-hide'>manord</div>";
} else if($_GET['o'] == 'editOrd') { 
	echo "<div class='div-request div-hide'>editOrd</div>";
} // /else manage order
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel = "stylesheet" type = "text/css" href = "css/chosen.css" />
	<style type="text/css"> input[type=text].center {text-align:center;} </style>
</head>
<body>
<center><h3><ol class="breadcrumb"> <li class="active">Invoices - Supplier </li></ol></h3></center>
 
<!--
<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Invoice</li>
  <li class="active">
  	<?php if($_GET['o'] == 'add') { ?>
  		New Invoice - Whole Sale
		<?php } else if($_GET['o'] == 'manord') { ?>
			Manage Invoice
		<?php } // /else manage order ?>
  </li>
</ol>


<h4>
	<i class='glyphicon glyphicon-circle-arrow-right'></i>
	<?php if($_GET['o'] == 'add') {
		echo "Add Order";
	} else if($_GET['o'] == 'manord') { 
		echo "Manage Order";
	} else if($_GET['o'] == 'editOrd') { 
		echo "Edit Order";
	}
	?>	
</h4>
-->


<div class="panel panel-primary">
	<div class="panel-heading">

		<?php if($_GET['o'] == 'add') { ?>
    <i class="glyphicon glyphicon-plus-sign"></i>  New Invoice 
		<?php } else if($_GET['o'] == 'manord') { ?>
			<i class="glyphicon glyphicon-edit"></i>  Manage Invoice
		<?php } else if($_GET['o'] == 'editOrd') { ?>
			<i class="glyphicon glyphicon-edit"></i>  Edit Invoice
		<?php } ?>
	</div> <!--/panel-->	
	<div class="panel-body">
			
		<?php if($_GET['o'] == 'add') { 
			// add order
			?>			

			<div class="success-messages"></div> <!--/success-messages-->

  		<form class="form-horizontal" method="POST" action="supplier_info/createOrder.php" id="createOrderForm">

			  
			  <div class="form-group">
			 <!--   <label for="UserId" class="col-sm-2 control-label">স্টাফ আইডি</label>-->
			    <div class="col-sm-12">
				<?php 
				   $pq=mysqli_query($con,"select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='".$_SESSION['id']."' ");
				   while($pqrow=mysqli_fetch_array($pq)){
				?>
			     
			      <input type="hidden" class="form-control" id="UserId" name="UserId" value="<?php echo $pqrow['userid']; ?>" autocomplete="off"  />
				  
				   <?php }?>
			    </div>
			  </div> 
			
<div class="col-md-4">	
		
			  	  <div class="form-group" style="display:none;">
			    <label for="UserId" class="col-sm-4 control-label">Invoice No</label>
			    <div class="col-sm-8">
				<?php
				 $pq=mysqli_query($con,"select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='".$_SESSION['id']."' ");
				 while($pqrow=mysqli_fetch_array($pq)){
				 $User_ID= $pqrow['userid'];	
			}?> 
			
				<?php 
				   $pq=mysqli_query($con,"select MAX(id)+1 as max_id,user_id from sup_orders where user_id='".$_SESSION['id']."' ");
				   while($pqrow=mysqli_fetch_array($pq)){
				?>
        <td>
		<input class="form-control" type="text" name="OrderId1"  value="<?php echo $pqrow['max_id']; ?>" disabled="true" />
        <input class="form-control" type="hidden" name="OrderId"    value="<?php echo $pqrow['user_id']; ?><?php echo $pqrow['max_id']; ?>"  />
        </td>
		<?php }?>
		
			    </div>
			  </div> 
			  
			  <div class="form-group">
			    <label for="UserId" class="col-sm-4 control-label"> Invoice No</label>
			    <div class="col-sm-8">
				<?php
				 $pq=mysqli_query($con,"select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='".$_SESSION['id']."' ");
				 while($pqrow=mysqli_fetch_array($pq)){
				 $User_ID= $pqrow['userid'];	
			}?> 
			
				<?php 
				   $pq=mysqli_query($con,"select MAX(custom_invoice_no)+1 as max_custom_id,user_id from sup_orders where user_id='".$_SESSION['id']."' ");
				   while($pqrow=mysqli_fetch_array($pq)){
				?>
        <td>
		<input class="form-control" type="hidden" name="CustomInv1"  value="<?php echo $pqrow['max_custom_id']; ?>" disabled="true" />
        <input class="form-control" type="text" name="CustomInv"   value="<?php echo $pqrow['max_custom_id']; ?>"  />
        </td>
		<?php }?>
		
			    </div>
			  </div> 
			  
			  <div class="form-group">
			    <label for="orderDate" class="col-sm-4 control-label">Date</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="orderDate" name="orderDate" value="<?php date_default_timezone_set("Asia/Dhaka"); echo date("m/d/Y"); ?>" autocomplete="off" />
			    </div>
			  </div>
			  
			  <div class="form-group" style="display:none;">
			    <label for="DeliveryDate" class="col-sm-4 control-label">Delivery Date /Last Update </label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="DeliveryDate" name="DeliveryDate" value="0" autocomplete="off"  />
			    </div>
			  </div>

			  <div class="form-group" style="display:none;">
			    <label for="CustId11" class="col-sm-4 control-label"> Phone </label>
			    <div class="col-sm-8">
				
				<select style="width:100%;" class="form-control chosen-select" Id="CustIdPhn" name="CustIdPhn" required="" >
		<option value="#">Select Supplier Phone </option>
		
				      	<?php 
				      	$sql = "SELECT  sup_id,contact_info FROM supplier WHERE user_id='".$_SESSION['id']."' ";
								$result = $con->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} 
				      	?>
						
		</select> 
				 
			    </div>
			  </div>
			  
			   <div class="form-group">
			    <label for="CustId11" class="col-sm-4 control-label">  Name </label>
			    <div class="col-sm-8">
				
				<select style="width:100%;" class="form-control chosen-select" Id="CustIdName" name="CustIdName" required="" >
		<option value="#">Select Supplier Name</option>
		
				      	<?php 
				      	$sql = "SELECT  sup_id,supplier_name FROM supplier WHERE user_id='".$_SESSION['id']."' ";
								$result = $con->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} 
				      	?>
						
		</select> 
				 
			    </div>
			  </div>
	</div>
	
<div class="col-md-4">	
			  <div class="form-group" style="display:none;" >
			    <label for="CustId" class="col-sm-4 control-label">Supplier Id </label>
			    <div class="col-sm-8">
			     <input type="text" class="form-control" id="CustId" name="CustId" placeholder="Client Id" value="00" autocomplete="off" />
			    </div>
			  </div>
			  
			  
			  <div class="form-group">
			    <label for="clientName" class="col-sm-4 control-label">Supplier Name </label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Supplier Name" value="Na" autocomplete="off" />
			    </div>
			  </div>  
			  
			  <div class="form-group">
			    <label for="clientContact" class="col-sm-4 control-label">Phone No </label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="clientContact" name="clientContact" placeholder="Contact Number" value="Na" autocomplete="off" />
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="clientContact" class="col-sm-4 control-label">Email </label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="Email" name="Email" placeholder="Email" value="Na" autocomplete="off" />
			    </div>
			  </div> 	
		 		  
</div>	

<div class="col-md-4">	 

			 <div class="form-group">
			    <label for="clientContact" class="col-sm-4 control-label">Address </label>
			    <div class="col-sm-8">
				   <textarea id="Address" name="Address" class="form-control">Na</textarea>
			     </div>
			  </div>
			  
			    <div class="form-group">
			    <label for="PreDue" class="col-sm-4 control-label"> Previous  Dues</label>
			    <div class="col-sm-8">
			    <input type="text" class="form-control" id="PreDue" name="PreDue" placeholder="Previous Due" value="0" autocomplete="off" onkeyup="myFunction()" />
			    </div>
			  </div>
			  
			 	  		
</div> 		  		
 	
            		  

			  <table class="table" id="productTable" >
			  	<thead>
			  		<tr>			  			
			  			<th style="width:23%;"> Service / Category </th> 
			  			<th style="width:20%;"><center> Short Details  </center></th> 
			  			<th style="width:8%;"><center> Quantity  </center></th> 
			  			<th style="width:10%;"><center> Price </center></th>			  			
			  			<th style="width:10%;"><center> Total </center></th>			  			
			  			<th style="width:5%;">Remove</th>
			  		</tr>
			  	</thead>
			  	<tbody>
				 
				 <?php
			  		$arrayNumber = 0; // Add Row Option 
			  		for($x = 1; $x < 2; $x++) { ?> <!-- productTable Row View Amount 1 < 2 = 1 -->
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td>
			  					<div class="form-group">

			  					<select class="form-control chosen-select " name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" >
			  						<option value=""> Select Service / Category</option>
			  						<?php
			  							//$productSql = "SELECT * FROM product WHERE active = 1 AND status = 1 AND quantity != 0"; dont show product when qty=0
										$productSql = "SELECT * FROM product WHERE user_id='".$_SESSION['id']."' order by product_id asc";
			  							$productData = $con->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['product_id']."' id='changeProduct".$row['product_id']."'>".$row['product_name']."</option>";
										 	} // /while 
			  			?>
						
						</select>
			  					</div>
			  				</td>
							
							<td style="padding-left:15px;">
			  					<div class="form-group">
			  				<input type="text" name="ShortDetails[]" id="ShortDetails<?php echo $x; ?>" value="Na" class="form-control center">
			  					</div>
			  				</td>

			  				<td style="padding-left:0px;display:none;">
			  					<div class="form-group">
			  				<input type="text" name="Stock[]" id="Stock<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" class="form-control center " disabled="true" >
			  					</div>
			  				</td>
							
							<td style="padding-left:30px;">
			  					<div class="form-group">
			  					<input type="text" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" class="form-control center " >
			  					</div>
			  				</td>
							
							<td style="padding-left:0px;display:none;">
			  					<div class="form-group">
			  					<input type="text" name="RecStock[]" id="RecStock<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" class="form-control center "  disabled="true" >
			  					</div>
			  				</td>
							
							<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate[]" id="rate<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" class="form-control center " />			  					
			  					<input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>"  class="form-control" /> 
			  				</td>
							
			  				<td style="padding-left:10px;">			  					
			  					<input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control center " disabled="true" />			  					
			  					<input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" />
                                
			  				</td>
			  				<td>
                          <button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber++;
			  		} // /for
			  		?>
			  	</tbody>
			  	
			  </table>
			  
			  <div >
			  <button type="button" class="btn btn-default" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i>  Add New</button>
			  </div>
			  
			  <div class="col-md-6">
			  	<div class="form-group" style="display:none;" >
				    <label for="subTotal" class="col-sm-6 control-label"> Sub Amount</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" />
				      <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group" style="display:none;" >
				    <label for="vat" class="col-sm-6 control-label"> Vat %</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="vat" name="vat" disabled="true" />
				      <input type="hidden" class="form-control" id="vatValue" name="vatValue" />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="totalAmount" class="col-sm-6 control-label">Total Amount</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="totalAmount" name="totalAmount" disabled="true"/>
				      <input type="hidden" class="form-control" id="totalAmountValue" name="totalAmountValue" />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="discount" class="col-sm-6 control-label">Discount</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="discount" name="discount" value="0" onkeyup="discountFunc()"  oninput="myFunctionTotal()" autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group">
				    <label for="grandTotal" class="col-sm-6 control-label">Grand Total</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="grandTotal" name="grandTotal" disabled="true" onkeyup="myFunction()" />
				      <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" onkeyup="myFunction()" />
				    </div>
				  </div> <!--/form-group-->			  		  
			  </div> <!--/col-md-6-->

			  <div class="col-md-6">
			  
				  
			    <div class="form-group">
				    <label for="GTotal" class="col-sm-6 control-label">Grand Total+ Previous Dues </label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="GTotal1" name="GTotal1" autocomplete="off" disabled="true"  />
				      <input type="hidden" class="form-control" id="GTotal" name="GTotal" autocomplete="off"  />
				    </div>
				  </div> 
			  
			  	<div class="form-group">
				    <label for="paid" class="col-sm-6 control-label">Paid Money</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="paid" name="paid" autocomplete="off" onkeyup="paidAmount()"  />
					   <input type="hidden" class="form-control" id="Paid_dd" name="Paid_dd" autocomplete="off" value="0" onkeyup="paidAmount()"    />
				    </div>
				  </div> 
				
		<!--	Recent Dues / Due	 -->  
				   <div class="form-group">
				    <label for="RecDues" class="col-sm-6 control-label">Recent Dues</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="RecDues1" name="RecDues1"  disabled="true"/>
				      <input type="hidden" class="form-control" id="RecDues" name="RecDues" />
				    </div>
				  </div> 
				  
				  
				  <!--/form-group-->			  
				  
				  
				  
<!-- Recent Kisti	
	<script>
  function myFunction() {
    var x = Number (document.getElementById("due").value);
    var y = Number (document.getElementById("Duration").value);
    var z = Number (x / y);
    document.getElementById("KistiAmt1").value = z;
    document.getElementById("KistiAmt").value = z;
	                  }
  </script>
  
   -->
<!-- Recent Kisti -->
              
				  
				  <!--/form-group-->		
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-6 control-label">Payment Type</label>
				    <div class="col-sm-6">
				      <select class="form-control" name="paymentType" id="paymentType">
				      	<option value="1">Check</option>
				      	<option value="2">Cash</option>
				      	<option value="3">Credit Card</option>
				      </select>
				    </div>
				  </div> <!--/form-group-->		
				  
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-6 control-label">Payment Status</label>
				    <div class="col-sm-6">
				      <select class="form-control" name="paymentStatus" id="paymentStatus">
				      	<option value="1">Full Payment</option>
				      	<option value="2">Advance Payment</option>
				      	<option value="3">Half Payment</option>
				      	<option value="4">Some Payment</option>
				      	<option value="5">No Payment</option>
				      </select>
				    </div>
				  </div> <!--/form-group-->							  
			  </div> <!--/col-md-6-->


			  <div class="form-group submitButtonFooter">
			    <div class="col-sm-offset-5 col-sm-12">
			    <button type="button" class="btn btn-primary" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i>  Add New </button>
                <button type="submit" id="createOrderBtn" data-loading-text="Loading..." class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                <!--<button type="reset" class="btn btn-danger" onclick="resetOrderForm()"><i class="glyphicon glyphicon-erase"></i> Reset</button>-->
			    </div>
			  </div>
			</form>
		<?php } else if($_GET['o'] == 'manord') { 
			// manage order
			?>

			<div id="success-messages"></div>
			
			<table class="table table-hover" id="manageOrderTable">
				<thead>
					<tr>
						<!-- <th>Sl No</th> -->
						<th>Invoice No</th>
				<!-- 	<th>User</th> -->
						<th>Date</th>
						<th>Supplier</th>
						<th>Mobile</th>
						<th>Pre.Due</th>
						<th>Item</th>
						<th>Today Total </th>
						<th>GT Price </th>
		               <th>Payment Type</th>  
						<th>Action</th>
					</tr>
				</thead>
			</table>

		<?php 
		// /else manage order
		} else if($_GET['o'] == 'editOrd') {
			// get order
			?>
			
			<div class="success-messages"></div> <!--/success-messages-->

  		<form class="form-horizontal" method="POST" action="supplier_info/editOrder.php" id="editOrderForm">

  			<?php $orderId = $_GET['i'];

  			$sql = "SELECT sup_orders.order_id, sup_orders.order_date, sup_orders.client_name, sup_orders.client_contact, sup_orders.sub_total, sup_orders.vat, sup_orders.total_amount,
			sup_orders.discount,sup_orders.pre_due, sup_orders.today_total, sup_orders.grand_total, sup_orders.paid, sup_orders.deliver_date_paid, sup_orders.due, sup_orders.payment_type, sup_orders.payment_status,sup_orders.sup_id ,sup_orders.user_id,sup_orders.address   
			FROM sup_orders  WHERE sup_orders.order_id = {$orderId}";

				$result = $con->query($sql);
				$data = $result->fetch_row();				
  			?>

<div class="col-md-6">	
			  <div class="form-group"  style="display:none;" >
			    <label for="orderId" class="col-sm-4 control-label">User Id</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="UserId1" name="UserId1" autocomplete="off" value="<?php echo $data[17] ?>" disabled="true" />
			      <input type="hidden" class="form-control" id="UserId" name="UserId" autocomplete="off" value="<?php echo $data[17] ?>"  />
			    </div>
			  </div>
		  
             <div class="form-group"  style="display:none;" >
			    <label for="orderId" class="col-sm-4 control-label">Client</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="CustId1" name="CustId1" autocomplete="off" value="<?php echo $data[16] ?>" disabled="true" />
			      <input type="hidden" class="form-control" id="CustId" name="CustId" autocomplete="off" value="<?php echo $data[16] ?>"  />
			    </div>
			  </div>

             <div class="form-group">
			    <label for="orderIDa" class="col-sm-4 control-label">Invoice No </label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="orderIDa1" name="orderIDa1" autocomplete="off" value="<?php echo $data[0] ?>" disabled="true" />
			      <input type="hidden" class="form-control" id="orderIDa" name="orderIDa" autocomplete="off" value="<?php echo $data[0] ?>"  />
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="orderDate" class="col-sm-4 control-label">Date </label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="orderDate" name="orderDate" autocomplete="off" value="<?php echo $data[1] ?>" />
			    </div>
			  </div> 
			  
			  <div class="form-group">
			    <label for="clientName" class="col-sm-4 control-label">Customer</label>
			    <div class="col-sm-8">
			      <input type="hidden" class="form-control" id="clientName1" name="clientName1" placeholder="Client Name" autocomplete="off" value="<?php echo $data[2] ?>" disabled="true" />
			      <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Client Name" autocomplete="off" value="<?php echo $data[2] ?>" />
			    </div>
			  </div>  
</div>  

<div class="col-md-6">	 
			  <div class="form-group">
			    <label for="clientContact" class="col-sm-4 control-label">Phone No</label>
			    <div class="col-sm-8">
			      <input type="hidden" class="form-control" id="clientContact1" name="clientContact1" placeholder="Contact Number" autocomplete="off" value="<?php echo $data[3] ?>"  disabled="true"/>
			      <input type="text" class="form-control" id="clientContact" name="clientContact" placeholder="Contact Number" autocomplete="off" value="<?php echo $data[3] ?>" />
			    </div>
			  </div> 
			  
			   <div class="form-group">
			    <label for="clientContact" class="col-sm-4 control-label">Address </label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" value="<?php echo $data[18] ?>" autocomplete="off" />
			    </div>
			  </div>

             <div class="form-group">
			    <label for="PreDue" class="col-sm-4 control-label"> Previous Due</label>
			    <div class="col-sm-8">
			      <input type="hidden" class="form-control" id="PreDue1" name="PreDue1" placeholder="Previous Due" autocomplete="off" disabled="true" onkeyup="myFunction()" value="<?php echo $data[8] ?>" disabled="true"/>
			      <input type="text" class="form-control" id="PreDue" name="PreDue" placeholder="Previous Due" autocomplete="off" onkeyup="myFunction()" value="<?php echo $data[8] ?>"  />
			    </div>
			  </div>			  
</div>			  

<div class="col-md-12">	
			  <table class="table" id="productTable">
			  	<thead>
			            <th style="width:23%;"> Service / Category </th> 
			  			<th style="width:20%;"><center> Short Details  </center></th> 
			  			<th style="width:8%;"><center> Quantity  </center></th> 
			  			<th style="width:10%;"><center> Price </center></th>			  			
			  			<th style="width:10%;"><center> Total </center></th>			  			
			  			<th style="width:5%;">Remove</th>
			  	</thead>
			  	<tbody>
			  		<?php
                    $orderItemSql = "SELECT sup_order_item.order_item_id, sup_order_item.order_id, sup_order_item.product_id, sup_order_item.quantity,
					sup_order_item.rate, sup_order_item.total, sup_order_item.short_details
					FROM sup_order_item 
					WHERE sup_order_item.order_id = {$orderId}";
						$orderItemResult = $con->query($orderItemSql);
						// $orderItemData = $orderItemResult->fetch_all();						
						
						// print_r($orderItemData);
			  		$arrayNumber = 0;
			  		// for($x = 1; $x <= count($orderItemData); $x++) {
			  		$x = 1;
			  		while($orderItemData = $orderItemResult->fetch_array()) { 
			  			// print_r($orderItemData); ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td>
			  					<div class="form-group">
			  					<select class="form-control chosen-select" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" >
			  						<option value="">Select Service / Category</option>
			  						<?php
									//$productSql = "SELECT * FROM product WHERE active = 1 AND status = 1 AND quantity != 0"; dont show product when qty=0
			  							$productSql = "SELECT * FROM product WHERE user_id='".$_SESSION['id']."' order by product.product_id asc" ; 
			  							$productData = $con->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								$selected = "";
			  								if($row['product_id'] == $orderItemData['product_id']) {
			  									$selected = "selected";
			  								} else {
			  									$selected = "";
			  								}

			  								echo "<option value='".$row['product_id']."' id='changeProduct".$row['product_id']."' ".$selected." >".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
							
							<td style="padding-left:15px;">
			  					<div class="form-group">
			  				<input type="text" name="ShortDetails[]" id="ShortDetails<?php echo $x; ?>" value="<?php echo $orderItemData['short_details']; ?>" class="form-control center">
			  					</div>
			  				</td>
							
							<td style="padding-left:30px;">
			  					<div class="form-group">
			  					<input type="text" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off" class="form-control center" min="1" value="<?php echo $orderItemData['quantity']; ?>" />
			  					</div>
			  				</td>
			  				
							<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate[]" id="rate<?php echo $x; ?>" class="form-control center" value="<?php echo $orderItemData['rate']; ?>" onkeyup="getTotal(<?php echo $x ?>)" >			  					
			  					<input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>"  class="form-control" value="<?php echo $orderItemData['rate']; ?>" />
                             </td>
							
			  				<td style="padding-left:10px;">			  					
			  					<input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control center" disabled="true" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  					<input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['total']; ?>"/>			  					
							 </td>
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber++;
		  			$x++;
			  		} // /for
			  		?>
			  	</tbody>			  	
			  </table>
</div>
			  <div class="col-md-6">
			  	<div class="form-group" style="display:none;" >
				    <label for="subTotal" class="col-sm-5 control-label">Sub Amount</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" value="<?php echo $data[4] ?>" />
				      <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" value="<?php echo $data[4] ?>" />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group" style="display:none;" >
				    <label for="vat" class="col-sm-5 control-label">Vat %</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="vat" name="vat" disabled="true" value="<?php echo $data[5] ?>"  />
				      <input type="hidden" class="form-control" id="vatValue" name="vatValue" value="<?php echo $data[5] ?>"  />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group" >
				    <label for="totalAmount" class="col-sm-5 control-label"> Total Amount </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="totalAmount" name="totalAmount" disabled="true" value="<?php echo $data[6] ?>" />
				      <input type="hidden" class="form-control" id="totalAmountValue" name="totalAmountValue" value="<?php echo $data[6] ?>"  />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="discount" class="col-sm-5 control-label"> Discount</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" value="<?php echo $data[7] ?>" />
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group" >
				    <label for="grandTotal" class="col-sm-5 control-label">Grand Total</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="grandTotal" name="grandTotal" disabled="true" value="<?php echo $data[9] ?>"  />
				      <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" value="<?php echo $data[9] ?>"  />
				    </div>
				  </div> <!--/form-group-->			  		  
			  </div> <!--/col-md-6-->

			  <div class="col-md-6">
			  
			  	<div class="form-group">
				    <label for="GTotal" class="col-sm-5 control-label">Pre.Due + Grand Total </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="GTotal1" name="GTotal1" autocomplete="off" value="<?php echo $data[10] ?>"  disabled="true"  />
				      <input type="hidden" class="form-control" id="GTotal" name="GTotal" autocomplete="off" value="<?php echo $data[10] ?>"  />
				</div>
					
				  </div> 
			  
			  	<div class="form-group">
				    <label for="paid" class="col-sm-5 control-label">Paid Amount</label>
				    <div class="col-sm-7">
				      <input type="hidden" class="form-control" id="paid11" name="paid11" autocomplete="off" onkeyup="paidAmount()" value="<?php echo $data[11] ?>" disabled="true"   />
				      <input type="text" class="form-control" id="paid" name="paid" autocomplete="off" onkeyup="paidAmount()" value="<?php echo $data[11] ?>"   />
				    </div>
				  </div> 
				  
				  <div class="form-group" style="display:none;" >
				    <label for="Paid_dd" class="col-sm-5 control-label">Paid ( Delivery Date )</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="Paid_dd" name="Paid_dd" autocomplete="off" onkeyup="paidAmount()" value="<?php echo $data[12] ?>"   />
				    </div>
				  </div> 
				  
		<!-- Recent Dues / Due -->  
				   <div class="form-group">
				    <label for="RecDues" class="col-sm-5 control-label">Recent Dues</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="RecDues1" name="RecDues1" value="<?php echo $data[13] ?>"  disabled="true"/>
				      <input type="hidden" class="form-control" id="RecDues" name="RecDues" value="<?php echo $data[13] ?>" />
				    </div>
				  </div> 
		<!-- form-group -->	
		
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-5 control-label">Payment Type</label>
				    <div class="col-sm-7">
				      <select class="form-control" name="paymentType" id="paymentType" >
				      	<option value="">~~SELECT~~</option>
				      	<option value="1" <?php if($data[14] == 1) {
				      		echo "selected";
				      	} ?> >Check</option>
				      	<option value="2" <?php if($data[14] == 2) {
				      		echo "selected";
				      	} ?>  >Cash</option>
				      	<option value="3" <?php if($data[14] == 3) {
				      		echo "selected";
				      	} ?> >Credit Card</option>

				      </select>
				    </div>
				  </div> 
			<!--/form-group-->	
				  
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-5 control-label">Payment Status</label>
				    <div class="col-sm-7">
				      <select class="form-control" name="paymentStatus" id="paymentStatus">
				      	<option value="">~~SELECT~~</option>
				      	<option value="1" <?php if($data[15] == 1) { echo "selected"; } ?> >Full Paid</option>
				      	<option value="2" <?php if($data[15] == 2) { echo "selected"; } ?> >Advance Paid</option>
				      	<option value="3" <?php if($data[15] == 3) { echo "selected"; } ?> >Half Paid</option>
						<option value="4" <?php if($data[15] == 4) { echo "selected"; } ?> >Some Paid</option>
						<option value="5" <?php if($data[15] == 5) { echo "selected"; } ?> >Not Paid </option>
						
				      </select>
				    </div>
				  </div> <!--/form-group-->							  
			  </div> <!--/col-md-6-->

               
			  <div class="form-group editButtonFooter"> 
			    <div class="col-sm-offset-5 col-sm-12">
			    <button type="button" class="btn btn-primary" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i> Add New </button>

			    <input type="hidden" name="orderId" id="orderId" value="<?php echo $_GET['i']; ?>" />

			    <button type="submit" id="editOrderBtn" data-loading-text="Loading..." class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Invoice Update </button>
			      
			    </div>
			  </div>
			  
			</form>

			<?php
		} // /get order else  ?>


	</div> <!--/panel-->	
</div> <!--/panel-->	


<!-- edit order -->
<div class="modal fade" tabindex="-1" role="dialog" id="paymentOrderModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-edit"></i> Edit Payment</h4>
      </div>      

      <div class="modal-body form-horizontal" style="max-height:500px; overflow:auto;" >

      	<div class="paymentOrderMessages"></div>

      	     				 				 
			  <div class="form-group">
			    <label for="due" class="col-sm-3 control-label">Due Amount</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="due" name="due" disabled="true" />					
			    </div>
			  </div> <!--/form-group-->		
			  <div class="form-group">
			    <label for="payAmount" class="col-sm-3 control-label">Pay Amount</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="payAmount" name="payAmount"/>					      
			    </div>
			  </div> <!--/form-group-->		
			  <div class="form-group">
			    <label for="clientContact" class="col-sm-3 control-label">Payment Type</label>
			    <div class="col-sm-9">
			      <select class="form-control" name="paymentType" id="paymentType" >
			      	<option value="">~~SELECT~~</option>
			      	<option value="1">Cheque</option>
			      	<option value="2">Cash</option>
			      	<option value="3">Credit Card</option>
			      </select>
			    </div>
			  </div> <!--/form-group-->							  
			  <div class="form-group">
			    <label for="clientContact" class="col-sm-3 control-label">Payment Status</label>
			    <div class="col-sm-9">
			      <select class="form-control" name="paymentStatus" id="paymentStatus">
			      	<option value="">~~SELECT~~</option>
			      	<option value="1">Full Payment</option>
				      	<option value="2">Advance Payment</option>
				      	<option value="3">Half Payment</option>
				      	<option value="4">Some Payment</option>
				      	<option value="5">No Payment</option>
			      </select>
			    </div>
			  </div> <!--/form-group-->							  				  
      	        
      </div> <!--/modal-body-->
      <div class="modal-footer">
      	<button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="updatePaymentOrderBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>	
      </div>           
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /edit order-->

<!-- remove order -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeOrderModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Order</h4>
      </div>
      <div class="modal-body">

      	<div class="removeOrderMessages"></div>

        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeProductFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeOrderBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 
 
<?php require_once '../includes/footer.php'; ?>

<script>
	$("#CustIdPhn").on("change", function(){
		var customerID = $("#CustIdPhn").val();
		if(customerID == "")
		{
			alert("Please enter a valid customer ID!");
		}
						
		else{
			$.ajax({url: "ajax_c_load.php?c=" + customerID, success: function(result){
				var customer = JSON.parse(result);
				
				$("#CustId").val(customer.CustomerIdd);
				$("#clientName1").val(customer.customerName);
				$("#clientName").val(customer.customerName);
				$("#clientContact1").val(customer.customerContact);
				$("#clientContact").val(customer.customerContact);
				$("#Address").val(customer.customerAddress);
				
				$("#PreDue1").val(customer.preDues);
				$("#PreDue").val(customer.preDues);
				
			}});
		}
	});
</script>

<script>
	$("#CustIdName").on("change", function(){
		var supplierID = $("#CustIdName").val();
		if(supplierID == "")
		{
			alert("Please enter a valid supplier ID!");
		}
						
		else{
			$.ajax({url: "ajax_c_load_sup.php?c=" + supplierID, success: function(result){
				var supplier = JSON.parse(result);
				
				$("#CustId").val(supplier.supplierIdd);
				$("#clientName1").val(supplier.supplierName);
				$("#clientName").val(supplier.supplierName);
				$("#clientContact1").val(supplier.supplierContact);
				$("#clientContact").val(supplier.supplierContact);
				$("#Address").val(supplier.supplierAddress);
				
				$("#PreDue1").val(supplier.preDues);
				$("#PreDue").val(supplier.preDues);
				
			}});
		}
	});
</script>

<script src="custom/js/order_supplier.js"></script>
<script src = "js/chosen.js"></script>
<script type = "text/javascript">
	$('.chosen-select').chosen({width: "100%"});
</script>



<!--Add Row Option Line No 158, 159 ->
	