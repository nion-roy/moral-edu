<?php require_once 'header.php'; ?>


<?php

if (isset($_POST['btnsave'])) {

	$UserId = $_POST['UserId'];
	$CrseName = $_POST['CrseName'];
	$Topic = $_POST['Topic'];

	if (empty($CrseName)) {
		$errMSG = "Please Enter Course Name.";
	}




	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO crse_topic (user_id,crse_name,topic,status) VALUES(:UserId,:CrseName,:Topic,1)');


		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':CrseName', $CrseName);
		$stmt->bindParam(':Topic', $Topic);


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
				<li class="active"> Course Topic Add </li>
			</ol>
		</h4>
	</center>

	<?php require_once 'courses-info-left-menu-link.php'; ?>


	<!-- <h1 class="h2"><a class="btn btn-primary" href="crse-topic-add"> <span class="glyphicon glyphicon-plus"></span>Add New</a>
			<a class="btn btn-success" href="crse-topic"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View</a>
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
					<td><label class="control-label">Course Name </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="CrseName" name="CrseName" required="">
							<option value="#">Select Course</option>

							<?php
							$sql = "SELECT product_id,product_name FROM product where  user_id='" . $_SESSION['id'] . "'";
							$result = $con->query($sql);

							while ($row = $result->fetch_array()) {
								echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							?>
						</select>
				</tr>

				<tr>
					<td><label class="control-label">Topic</label></td>
					<td><input class="form-control" type="text" name="Topic" placeholder="Topic"></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
				</tr>



			</table>
			
			<button type="submit" name="btnsave" class="btn btn-primary">
				<span class="glyphicon glyphicon-save"></span> &nbsp; Save
			</button>

		</form>




	</div>


	<div class="col-md-12">
		<?php include('../includes/footer.php'); ?>

	</div>