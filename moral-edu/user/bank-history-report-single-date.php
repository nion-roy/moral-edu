<?php require_once 'header.php'; ?> 
<center><h4><ol class="breadcrumb"> <li class="active"> Single Bank History-By Date</li></ol></h4></center>
<link rel="stylesheet" href="css/buttons.css">
<?php require_once 'more-fals/bank-option-link.php'; ?> 

<div class="container">
<div class="col-md-7">
<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
			
				<i class="glyphicon glyphicon-check"></i>	Bank History-By Date(Single)
			</div>
			 
			<div class="panel-body">
				
				<form class="form-horizontal" action="php_action/bank_history_report_single_date.php" method="post" id="getOrderReportForm">
				<div class="form-group">
				    <label for="startDate" class="col-sm-3 control-label"> Bank Name</label>
				    <div class="col-sm-9">
				      <td> 
					 <select style="width:100%;" class="form-control" Id="BankId" name="BankId" required="" >
		<option value="#">Select Bank</option>
				      	<?php 
				      	$sql = "SELECT  id,name FROM bank_name  ";
								$result = $con->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} 
				      	?>
		</select>
					  </td>
				    </div>
				  </div>
				  
				  
				  <div class="form-group">
				    <label for="startDate" class="col-sm-3 control-label">From Date</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="startDate" name="startDate" placeholder="From Date" />
				    </div>
				  </div>
				  
				  
				  <div class="form-group">
				    <label for="endDate" class="col-sm-3 control-label">To Date</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="endDate" name="endDate" placeholder="To Date" />
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-3 col-sm-10">
				      <button type="submit" class="btn btn-success" id="generateReportBtn"> <i class="glyphicon glyphicon-ok-sign"></i> View Report</button>
				    </div>
				  </div>
				</form>

			</div>
			 
		</div>		
	 
	</div> 
</div> 
</div>  

<?php include '../includes/footer.php'; ?>

<script src="custom/js/report.js"></script>
