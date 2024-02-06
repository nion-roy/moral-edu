<?php require_once 'header.php'; ?>
<?php


if (isset($_GET['delete_id'])) {


	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM expense_other WHERE id =:uid');
	$stmt_delete->bindParam(':uid', $_GET['delete_id']);
	$stmt_delete->execute();

	//header("Location:group.php");
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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
				<li class="active">Other Expense </li>
			</ol>
		</h4>
	</center>
	<?php require_once 'expenses-info-left-menu-link.php'; ?>

	<div class="div-action pull" style="padding-bottom:8px;">
		<a class="btn btn-primary" href="other-expense-add"> <span class="glyphicon glyphicon-plus"></span> &nbsp; Add New Expense </a>
		<span class="pull-right"><a href="other-exp-report-by-date"> <button class="btn btn-success "><span class="glyphicon glyphicon-print"></span> Date Wise Report</button> </a></span>
	</div>

	<h1 class="h2">

	</h1>

	<div style="width:100%" class="form-group input-group">
		<span style="width:120px;" class="input-group-addon">Search :</span>
		<input id="myInput" style="width:100%;" type="text" class="form-control" placeholder="Search.....">
	</div>



	<table width="100%" class="table  table-hover table-responsive" group_id="dataTables-example">
		<thead>
			<tr>


				<th>SL</th>
				<th>Name</th>
				<th>Cost</th>
				<th> Reference </th>
				<th> Date</th>
				<th>Edit</th>

				<th>Delete</th>
			</tr>
		</thead>

		<tbody id="tbody">
			<?php
			$sl = 0;
			$eq = mysqli_query($con, "select * from expense_other where user_id='" . $_SESSION['id'] . "'  ORDER BY id DESC ");
			while ($eqrow = mysqli_fetch_array($eq)) {
				$eidm = $eqrow['id'];
			?>
				<tr>


					<td><?php echo ++$sl; ?></td>
					<td><?php echo $eqrow['expense_name']; ?></td>
					<td><?php echo $eqrow['expense_cost']; ?></td>
					<td><?php echo $eqrow['reference']; ?></td>
					<td><?php echo date("M d,Y", strtotime($eqrow['entry_date'])); ?></td>


					<td><a class="btn btn-info" href="other-expense-edit?edit_id=<?php echo $eqrow['id']; ?>" title="click for edit" onclick="return confirm('Do you want to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>
					<td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['id']; ?>" title="click for delete" onclick="return confirm('Do you want to edit ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td>


				</tr>
			<?php
			}
			?>

		</tbody>
	</table>


	<?php include('../includes/footer.php'); ?>