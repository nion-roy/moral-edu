<?php require_once 'header.php'; ?>


<?php


if (isset($_GET['delete_id'])) {


	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM batch WHERE id =:uid');
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
</head>

<body>

	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active">Batch Name/No. </li>
			</ol>
		</h4>
	</center>
	
	<?php require_once 'student-info-left-menu-link.php'; ?>

	<div class="col-md-2">
		<a class="btn btn-primary" href="batch-no-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
		<br><br>
	</div>

	<?php require_once 'more-fals/search-box.php'; ?>




	<table width="100%" class="table  table-hover table-responsive" group_id="dataTables-example">
		<thead>
			<tr>


				<th>SL</th>
				<th>Batch Name</th>
				<th>Batch No.</th>
				<th> Trainer Name </th>
				<th> Date</th>
				<th>Edit</th>

				<th>Delete</th>
			</tr>
		</thead>

		<tbody id="tbody">
			<?php
			$sl = 0;
			$eq = mysqli_query($con, "select * from batch where user_id='" . $_SESSION['id'] . "'  ORDER BY id DESC ");
			while ($eqrow = mysqli_fetch_array($eq)) {
				$eidm = $eqrow['id'];
			?>
				<tr>


					<td><?php echo ++$sl; ?></td>
					<td><?php echo $eqrow['batch_name']; ?></td>
					<td><?php echo $eqrow['batch_no']; ?></td>
					<td><?php echo $eqrow['trainer']; ?></td>
					<td><?php echo date("M d,Y", strtotime($eqrow['entry_date'])); ?></td>


					<td><a class="btn btn-info" href="batch-no-edit?edit_id=<?php echo $eqrow['id']; ?>" title="click for edit" onclick="return confirm('Do you want to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>
					<td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['id']; ?>" title="click for delete" onclick="return confirm('Do you want to edit ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td>


				</tr>
			<?php
			}
			?>

		</tbody>
	</table>


	<?php include('../includes/footer.php'); ?>