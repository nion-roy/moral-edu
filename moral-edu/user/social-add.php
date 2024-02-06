<?php require_once 'header.php'; ?>
<?php

error_reporting(~E_NOTICE); // avoid notice
if (isset($_POST['btnsave'])) {


	$user_id = $_POST['user_id'];

	$Facebook = $_POST['Facebook'];
	$Twitter = $_POST['Twitter'];
	$YouTube = $_POST['YouTube'];
	$Instagram = $_POST['Instagram'];

	if (empty($Facebook)) {
		$errMSG = "Please Enter Facebook Link ";
	}

	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO social_media (user_id,facebook,twitter,youtube,instagram) 
															VALUES(:user_id,:Facebook,:Twitter,:YouTube,:Instagram)');



		$stmt->bindParam(':user_id', $user_id);

		$stmt->bindParam(':Facebook', $Facebook);
		$stmt->bindParam(':Twitter', $Twitter);
		$stmt->bindParam(':YouTube', $YouTube);
		$stmt->bindParam(':Instagram', $Instagram);

		if ($stmt->execute()) {
			$successMSG = " New Social Media Add Succesfully  ...";
			//header("refresh:2; customer.php"); // redirects image view page after 5 seconds.
		} else {
			$errMSG = "error while inserting....";
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/buttons.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

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

	<!-- <h1 class="h2">&nbsp;<a class="btn btn-default" href="social-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
		<a class="btn btn-default" href="social"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View </a>
	</h1> -->

	<div class="col-md-8">

	<?php
	if (isset($errMSG)) {
	?>
		<div class="alert alert-danger">
			<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
		</div>
	<?php
	} else if (isset($successMSG)) {
	?>
		<div class="alert alert-success">
			<strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
		</div>
	<?php
	}
	?>

	<form method="post" enctype="multipart/form-data" class="form-horizontal">

		<table class="table table-bordered table-responsive">

			<tr>

				<?php

				include('conn.php');
				$pq = mysqli_query($con, "select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='" . $_SESSION['id'] . "'");
				while ($pqrow = mysqli_fetch_array($pq)) {
				?>

					<input class="form-control" type="hidden" name="user_id" value="<?php echo $pqrow['userid']; ?>" />
				<?php } ?>
			</tr>


			<tr>
				<td><label class="control-label"> Facebook </label></td>
				<td><input class="form-control" type="text" name="Facebook" placeholder="Facebook Link" value="<?php echo $Facebook; ?>" /></td>
			</tr>

			<tr>
				<td><label class="control-label"> Twitter </label></td>
				<td><input class="form-control" type="text" name="Twitter" placeholder="Twitter Link" value="<?php echo $Twitter; ?>" /></td>
			</tr>

			<tr>
				<td><label class="control-label"> You Tube </label></td>
				<td><input class="form-control" type="text" name="YouTube" placeholder="You Tube Link" value="<?php echo $YouTube; ?>" /></td>
			</tr>

			<tr>
				<td><label class="control-label"> Instagram </label></td>
				<td><input class="form-control" type="text" name="Instagram" placeholder="Instagram" value="<?php echo $Instagram; ?>" /></td>
			</tr>


			<tr>
				<td><label class="control-label">Choose Picture </label></td>
				<td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
			</tr>

		</table>

			<button type="submit" name="btnsave" class="btn btn-default">
						<span class="glyphicon glyphicon-save"></span> &nbsp; save
					</button>


	</form>

	</div>


<div class="col-md-12">
<?php include('../includes/footer.php'); ?>

</div>