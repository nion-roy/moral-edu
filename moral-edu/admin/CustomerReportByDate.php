<?php require_once 'session.php'; ?>
<?php require_once 'header.php'; ?>

<center><h4> <ol class="breadcrumb"><li > Date Wise Customer Report  </li> </ol> </h4></center>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			<i class="glyphicon glyphicon-check"></i>	Customer Report 
			</div>
			<!-- /panel-heading -->
			<div class="panel-body">
				
				<form class="form-horizontal" action="php_action/CustomerReportByDate.php" method="post" id="getOrderReportForm">
				
				  <div class="form-group">
				    <label for="startDate" class="col-sm-2 control-label">Start Date</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="startDate" name="startDate" placeholder="Start Date" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="endDate" class="col-sm-2 control-label">End Date</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="endDate" name="endDate" placeholder="End Date" />
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" id="generateReportBtn"> <i class="glyphicon glyphicon-ok-sign"></i>  Report View</button>
				    </div>
				  </div>
				</form>

			</div>
			
			<!-- /panel-body -->
		</div>
	</div>
	<!-- /col-dm-12 -->
</div>
<!-- /row -->




<script src="custom/js/report.js"></script>

<?php include('../includes/footer.php'); ?>
