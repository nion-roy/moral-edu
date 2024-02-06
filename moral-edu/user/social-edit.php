<?php require_once 'header.php'; ?>
<?php
error_reporting(~E_NOTICE);
if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
	$customer_id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT * FROM social_media WHERE id =:uid');
	$stmt_edit->execute(array(':uid' => $customer_id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
} else {
	header("Location: index");
}



if (isset($_POST['btn_save_updates'])) {

	$Facebook = $_POST['Facebook'];
	$Twitter = $_POST['Twitter'];
	$YouTube = $_POST['YouTube'];
	$Instagram = $_POST['Instagram'];

	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('UPDATE social_media 
									     SET  facebook =:Facebook,
											  twitter=:Twitter,
											  youtube=:YouTube,
											  instagram=:Instagram
										      
								       WHERE id=:uid');


		$stmt->bindParam(':Facebook', $Facebook);
		$stmt->bindParam(':Twitter', $Twitter);
		$stmt->bindParam(':YouTube', $YouTube);
		$stmt->bindParam(':Instagram', $Instagram);

		$stmt->bindParam(':uid', $id);

		if ($stmt->execute()) {
?>
			<script>
				alert('Successfully Updated ...');
				window.location.href = 'social';
			</script>
<?php
		} else {
			$errMSG = "Sorry Data Could Not Updated !";
		}
	}
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- custom stylesheet -->
	<link rel="stylesheet" href="css/buttons.css">
	<link rel="stylesheet" href="style.css">


</head>

<body>

		<center>
			<h3>
				<ol class="breadcrumb">
					<li class="active"> Social Media Update</li>
				</ol>
			</h3>
		</center>

		<?php require_once 'website-info-left-menu-link.php'; ?>

		<div class="col-md-8">
		<form method="post" enctype="multipart/form-data" class="form-horizontal">


			<?php
			if (isset($errMSG)) {
			?>
				<div class="alert alert-danger">
					<span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
				</div>
			<?php
			}
			?>


			<table class="table table-hover table-responsive">


				<tr>
					<td><label class="control-label" style="color:#3b5998;"> Facebook </label></td>
					<td><input class="form-control" type="text" name="Facebook" placeholder="Facebook Link" value="<?php echo $facebook; ?>" /></td>
				</tr>

				<tr>
					<td><label class="control-label" style="color:#00acee;"> Twitter </label></td>
					<td><input class="form-control" type="text" name="Twitter" placeholder="Twitter Link" value="<?php echo $twitter; ?>" /></td>
				</tr>

				<tr>
					<td><label class="control-label" style="color:red;"> You Tube </label></td>
					<td><input class="form-control" type="text" name="YouTube" placeholder="You Tube Link" value="<?php echo $youtube; ?>" /></td>
				</tr>

				<tr>
					<td><label class="control-label" style="color:#3f729b;"> Instagram </label></td>
					<td><input class="form-control" type="text" name="Instagram" placeholder="Instagram" value="<?php echo $instagram; ?>" /></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
				</tr>

			</table>

				<button type="submit" name="btn_save_updates" class="btn btn-primary">
							<span class="glyphicon glyphicon-save"></span> Update
						</button>

						<a class="btn btn-danger" href="social"> <span class="glyphicon glyphicon-backward"></span> cancel </a>

	


		</form>

		</div>


<div class="col-md-12">
<?php include('../includes/footer.php'); ?>

</div>