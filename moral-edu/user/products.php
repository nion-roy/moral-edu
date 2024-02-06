<?php require_once 'header.php'; ?>


<?php

if (isset($_GET['delete_id'])) {

	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM product WHERE product_id =:uid');
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
	<title>Product</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
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
				<li class="active">Course List </li>
			</ol>
		</h4>
	</center>

	<?php require_once 'courses-info-left-menu-link.php'; ?>



	<div class="col-md-2">
		<a class="btn btn-primary" href="product-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
		<br><br>
	</div>

	<?php require_once 'more-fals/search-box.php'; ?>

	<table width="100%" class="table  table-hover table-responsive" group_id="dataTables-example">
		<thead>
			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Duration</th>
				<th>Fee</th>
				<th>My Cost</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody id="tbody">
			<?php
			$sl = 0;
			$eq = mysqli_query($con, "select * from product WHERE user_id='" . $_SESSION['id'] . "'  ORDER BY product_id asc ");
			while ($eqrow = mysqli_fetch_array($eq)) {

			?>
				<tr>


					<td><?php echo ++$sl; ?></td>
					<td><?php echo $eqrow['product_name']; ?></td>
					<td><?php echo $eqrow['duration']; ?></td>
					<td><?php echo $eqrow['course_fee']; ?></td>
					<td><?php echo $eqrow['my_cost']; ?></td>


					<td><a class="btn btn-info" href="products-edit?edit_id=<?php echo $eqrow['product_id']; ?>" title="click for edit" onclick="return confirm('Do You Want To Edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>
					<td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['product_id']; ?>" title="click for delete" onclick="return confirm('Are You Sure....?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td>

				</tr>
			<?php
			}
			?>

		</tbody>
	</table>


	<?php include('../includes/footer.php'); ?>