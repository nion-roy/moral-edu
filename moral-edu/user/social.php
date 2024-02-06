<?php require_once 'header.php'; ?>
<?php
if (isset($_GET['delete_id'])) {
	// select image from db to delete
	$stmt_select = $DB_con->prepare('SELECT userPic FROM social_media WHERE  id =:uid');
	$stmt_select->execute(array(':uid' => $_GET['delete_id']));
	$imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
	//unlink("user_images/".$imgRow['userPic']);

	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM social_media WHERE  id =:uid');
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
					<li class="active"> Social Media Section </li>
				</ol>
			</h4>
		</center>

		<?php require_once 'website-info-left-menu-link.php'; ?>

		<div class="buttons" style="display:none;">

			<div class="col-md-2">
				<a class="btn btn-default" style="width:100%" href="social-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
			</div>
		</div>

		<div style="margin-bottom: 2rem;">

		<table width="100%" class="table  table-hover " customer_id="dataTables-example">

			<?php
			$eq = mysqli_query($con, "select * from social_media  where user_id='" . $_SESSION['id'] . "' ORDER BY id DESC  ");
			while ($eqrow = mysqli_fetch_array($eq)) {

			?>


				<tr>
					<td style="color:#3b5998;"><label class="control-label">Facebook</label></td>
					<td><?php echo $eqrow['facebook']; ?></td>
				</tr>

				<tr>
					<td style="color:#00acee;"><label class="control-label">Twitter</label></td>
					<td><?php echo $eqrow['twitter']; ?></td>
				</tr>

				<tr>
					<td style="color:red;"><label class="control-label">YouTube</label></td>
					<td><?php echo $eqrow['youtube']; ?></td>
				</tr>

				<tr>
					<td style="color:#3f729b;"><label class="control-label">Instagram</label></td>
					<td><?php echo $eqrow['instagram']; ?></td>
				</tr>


				<tr>
					<td></td>
					<td></td>
				</tr>
				
				
			</tbody>
		</table>
		<tr>
			<td><a class="btn btn-info" href="social-edit?edit_id=<?php echo $eqrow['id']; ?>" title="click for edit" onclick="return confirm('Are You Sure To Edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>
			<!-- <td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['id']; ?>" title="click for delete" onclick="return confirm('Are You Sure To Delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td> -->

		</tr>

			<?php
			}
			?>
		</div>


<div class="col-md-12">
<?php include('../includes/footer.php'); ?>

</div>