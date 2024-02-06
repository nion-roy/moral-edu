<?php require_once 'header.php'; ?>
<?php

if (isset($_POST['btnsave'])) {

	$UserId = $_POST['UserId'];
	$YerName = $_POST['YerName'];



	if (empty($YerName)) {
		$errMSG = "Please Enter Year.";
	}




	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO year_name (user_id,yer_name) VALUES(:UserId,:YerName)');


		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':YerName', $YerName);


		if ($stmt->execute()) {
			$successMSG = "Data Add Successful...";
			//header("refresh:2; expense.php"); // redirects image view page after 5 seconds.
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

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/buttons.css">

</head>

<body>


	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active"> Year Add </li>
			</ol>
		</h4>
	</center>
	<?php require_once 'student-info-left-menu-link.php'; ?>

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

				<table class="table table-responsive">

					<tr>

						<?php
						$pq = mysqli_query($con, "select * from user where userid='" . $_SESSION['id'] . "'");
						while ($pqrow = mysqli_fetch_array($pq)) {
						?>

							<input class="form-control" type="hidden" name="UserId" value="<?php echo $pqrow['userid']; ?>" />
						<?php } ?>
					</tr>



					<tr>
						<td><label class="control-label">Group Name</label></td>
						<td><input class="form-control" type="text" name="YerName" placeholder="Year"></td>
					</tr>

					<tr>
						<td> </td>
						<td> </td>
					</tr>


				</table>

				<tr>
					<td colspan="2"><button type="submit" name="btnsave" class="btn btn-primary">
							<span class="glyphicon glyphicon-save"></span> &nbsp; Save
						</button>
					</td>
				</tr>

			</form>

	</div>



	<div class="col-md-12">
		<?php include('../includes/footer.php'); ?>

	</div>