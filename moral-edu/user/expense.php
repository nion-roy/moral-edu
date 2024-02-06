<?php require_once 'header.php'; ?>
<?php
if (isset($_GET['delete_id'])) {

	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM expense WHERE id =:uid');
	$stmt_delete->bindParam(':uid', $_GET['delete_id']);
	$stmt_delete->execute();

	//header("Location:group.php");
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />

	<link rel="stylesheet" href="css/table_data_center.css">
	<link rel="stylesheet" href="css/buttons.css">


	<!-- Search Script-->
	<script src="js/search.js"></script>
	<!-- Search Script-->

</head>

<body>

	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active"> Office Expenses Entry </li>
			</ol>
		</h4>
	</center>

	<?php require_once 'expenses-info-left-menu-link.php'; ?>

	<div class="div-action pull" style="padding-bottom:8px;">

		<a class="btn btn-primary" href="expense-add"> <span class="glyphicon glyphicon-plus"></span> &nbsp; Add New Expense </a>
		<a class="btn btn-primary" href="exp-name-office"> <span class="glyphicon glyphicon-list-alt"></span> &nbsp; Category Name </a>

		<span class="pull-right">
			<a href="exp-report-by-date"> <button class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Date Wise Report</button> </a>
			<a href="office-exp-report-by-heading"> <button class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Heading Wise Report</button> </a>
		</span>
	</div>

	<div style="width:100%" class="form-group input-group">
		<span style="width:120px;" class="input-group-addon">Search</span>
		<input id="myInput" style="width:100%;" type="text" class="form-control" placeholder="Search.....">
	</div>



	<table width="100%" class="table   table-responsive table-hover" group_id="dataTables-example">
		<thead>
			<tr>


				<th>SL</th>
				<th>Expense Name</th>
				<th>Details</th>
				<th>Amount</th>
				<th>Taka</th>
				<th>Reference </th>
				<th> Date</th>
				<th>Edit</th>

				<th>Delete</th>
			</tr>
		</thead>

		<tbody id="tbody">
			<?php
			$sl = 0;
			$eq = mysqli_query($con, "select * from expense

                              left join office_exp_name on office_exp_name.of_id=expense.expense_name
								where expense.user_id='" . $_SESSION['id'] . "' ORDER BY expense.id DESC limit 300");
			while ($eqrow = mysqli_fetch_array($eq)) {
				$eidm = $eqrow['id'];
			?>
				<tr>


					<td><?php echo ++$sl; ?></td>
					<td><?php echo $eqrow['name']; ?></td>
					<td><?php echo $eqrow['exp_details']; ?></td>
					<td><?php echo $eqrow['ammount']; ?></td>
					<td><?php echo $eqrow['expense_cost']; ?></td>
					<td><?php echo $eqrow['reference']; ?></td>
					<td><?php echo date("M d,Y", strtotime($eqrow['entry_date'])); ?></td>


					<td><a class="btn btn-info" href="expense-edit?edit_id=<?php echo $eqrow['id']; ?>" title="click for edit" onclick="return confirm('Do You Want To Edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>

					<td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['id']; ?>" title="click for delete" onclick="return confirm('Do You Want To Delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td>


				</tr>
			<?php
			}
			?>

		</tbody>
	</table>


	<?php include('../includes/footer.php'); ?>