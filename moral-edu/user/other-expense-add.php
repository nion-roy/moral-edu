<?php require_once 'header.php'; ?>
<?php

if (isset($_POST['btnsave'])) {

	$UserId = $_POST['UserId'];
	$ExpName = $_POST['ExpName'];
	$ExpCost = $_POST['ExpCost'];
	$Refer = $_POST['Refer'];
	$Date = $_POST['Date'];


	if (empty($ExpName)) {
		$errMSG = "Please Enter Expense Name.";
	} else if (empty($ExpCost)) {
		$errMSG = "Please Enter Expense Cost.";
	}



	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO expense_other (user_id,expense_name,expense_cost,reference,entry_date) VALUES(:UserId,:ExpName,:ExpCost,:Refer,:Date)');


		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':ExpName', $ExpName);
		$stmt->bindParam(':ExpCost', $ExpCost);
		$stmt->bindParam(':Refer', $Refer);
		$stmt->bindParam(':Date', $Date);

		if ($stmt->execute()) {
?>
			<script>
				alert('New Expense Add Successfully...');
				window.location.href = 'other-expense';
			</script>
<?php
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
	<link rel="stylesheet" href="css/buttons.css">
</head>

<body>


	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active"> Other Expense </li>
			</ol>
		</h4>
	</center>
	<?php require_once 'expenses-info-left-menu-link.php'; ?>


	<!-- <h1 class="h2">
		<a class="btn btn-success" href="other-expense"> <span class="glyphicon glyphicon-eye-open"></span>  View</a>
		</h1>
   -->

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
				<td><label class="control-label">Expense Name</label></td>
				<td><input class="form-control" type="text" name="ExpName" placeholder="Expense Name" value="<?php echo $ExpName; ?>"></td>
			</tr>


			<tr>
				<td><label class="control-label">Expense Ammount </label></td>
				<td><input class="form-control" type="text" name="ExpCost" placeholder="Expense Ammount" value="<?php echo $ExpCost; ?>"></td>
			</tr>

			<tr>
				<td><label class="control-label">Reference </label></td>
				<td><input class="form-control" type="text" name="Refer" placeholder="Reference" value="<?php echo $Refer; ?>"></td>
			</tr>

			<tr>
				<td><label class="control-label">Date </label></td>
				<td><input class="form-control" type="text" name="Date" placeholder="" value="<?php echo date("Y/m/d"); ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
			</tr>

		</table>

		<button type="submit" name="btnsave" class="btn btn-primary"> <span class="glyphicon glyphicon-save"></span> &nbsp; Save </button>

	</form>



	</div>


<div class="col-md-12">
<?php include('../includes/footer.php'); ?>

</div>