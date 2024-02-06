<?php require_once 'header.php'; ?>
<?php
if (isset($_GET['delete_id'])) {
	// select image from db to delete
	$stmt_select = $DB_con->prepare('SELECT userPic FROM slider_section WHERE  id =:uid');
	$stmt_select->execute(array(':uid' => $_GET['delete_id']));
	$imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
	unlink("user_images/" . $imgRow['userPic']);

	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM slider_section WHERE  id =:uid');
	$stmt_delete->bindParam(':uid', $_GET['delete_id']);
	$stmt_delete->execute();

	//header("Location:customer.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/buttons.css">
	<link rel="stylesheet" href="css/table_data_center.css">
	<script src="js/search.js"></script>
</head>

<body>
	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active">Slider Section </li>
			</ol>
		</h4>
	</center>

	<?php require_once 'website-info-left-menu-link.php'; ?>

	<div class="div-action pull pull-left" style="padding-bottom:8px;">
		<a class="btn btn-primary" style="width:100%" href="slider-section-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
	</div>

	<table width="100%" class="table table-hover" customer_id="dataTables-example">
		<thead>
			<tr>


				<th>SL</th>
				<th>Slider Picture</th>

				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody id="tbody">
			<?php
			$sl = 0;
			$eq = mysqli_query($con, "select * from slider_section  where user_id='" . $_SESSION['id'] . "' ORDER BY id asc   ");
			while ($eqrow = mysqli_fetch_array($eq)) {

			?>
				<tr>

					<td><?php echo  ++$sl; ?></td>
					<td> <img src="user_images/<?php echo $eqrow['userPic']; ?>" class="img-rounded" height="60px;" width="55px;" /></td>

					<td><a class="btn btn-info" href="slider-section-edit?edit_id=<?php echo $eqrow['id']; ?>" title="click for edit" onclick="return confirm('Are You Sure To Edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>
					<td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['id']; ?>" title="click for delete" onclick="return confirm('Are You Sure To Delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td>


				</tr>
			<?php
			}
			?>

		</tbody>
	</table>


	<?php require_once '../includes/footer.php'; ?>