<?php require_once 'header.php'; ?>
<?php

if (isset($_POST['btnsave'])) {

	$UserId = $_POST['UserId'];
	$BrdName = $_POST['BrdName'];



	if (empty($BrdName)) {
		$errMSG = "Please Enter Board Name.";
	}




	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO board (user_id,brd_name) VALUES(:UserId,:BrdName)');


		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':BrdName', $BrdName);


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
	<link rel="stylesheet" href="css/buttons.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>

<body>



	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active"> Board </li>
			</ol>
		</h4>
	</center>
	<?php require_once 'student-info-left-menu-link.php'; ?>


	<!-- <h1 class="h2">&nbsp;<a class="btn btn-primary" href="board_add.php"> <span class="glyphicon glyphicon-plus"></span>Add New</a>
			<a class="btn btn-success" href="board.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View</a>
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

			<table class="table table-hover table-responsive">

				<tr>

					<?php
					$pq = mysqli_query($con, "select * from user where userid='" . $_SESSION['id'] . "'");
					while ($pqrow = mysqli_fetch_array($pq)) {
					?>

						<input class="form-control" type="hidden" name="UserId" value="<?php echo $pqrow['userid']; ?>" />
					<?php } ?>
				</tr>



				<tr>
					<td><label class="control-label">Board Name</label></td>
					<td><input class="form-control" type="text" name="BrdName" placeholder="Board Name"></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
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

</body>

</html>