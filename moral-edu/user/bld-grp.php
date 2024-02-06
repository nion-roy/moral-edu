<?php require_once 'header.php'; ?>
<?php

if (isset($_GET['delete_id'])) {


	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM bld_grp WHERE bld_id =:uid');
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
				<li class="active">Blood Group </li>
			</ol>
		</h4>
	</center>

	<?php require_once 'student-info-left-menu-link.php'; ?>

	<div class="col-md-2">
		<a class="btn btn-primary" href="bld-grp-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
		<br><br>
	</div>

	<?php require_once 'more-fals/search-box.php'; ?>



	<table width="100%" class="table table-hover" group_id="dataTables-example">
		<thead>
			<tr>


				<!--<th>District Code</th>-->
				<th>Blood Group</th>

				<th>Edit</th>

				<th>Delete</th>
			</tr>
		</thead>

		<tbody id="tbody">
			<?php
			$eq = mysqli_query($con, "select * from bld_grp  ORDER BY bld_id DESC ");
			while ($eqrow = mysqli_fetch_array($eq)) {
				$eidm = $eqrow['bld_id'];
			?>
				<tr>


					<!--<td><?php echo $eqrow['bld_id']; ?></td>-->
					<td><?php echo $eqrow['bld_name']; ?></td>


					<td><a class="btn btn-info" href="bld-grp-edit?edit_id=<?php echo $eqrow['bld_id']; ?>" title="click for edit" onclick="return confirm('Do you want to Edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>

					<td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['bld_id']; ?>" title="click for delete" onclick="return confirm('Do you want to Delete ?')">
							<span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td>


				</tr>
			<?php
			}
			?>

		</tbody>
	</table>



	<?php include('../includes/footer.php'); ?>