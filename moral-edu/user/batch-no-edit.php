<?php require_once 'header.php'; ?>

<?php

if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
	$id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT * FROM batch WHERE id =:uid');
	$stmt_edit->execute(array(':uid' => $id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
} else {
	header("Location: batch-no");
}



if (isset($_POST['btn_save_updates'])) {

	$BatchName = $_POST['BatchName'];
	$BatchNo = $_POST['BatchNo'];
	$Trainer = $_POST['Trainer'];
	$Date = $_POST['Date'];

	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('UPDATE batch 
									     SET batch_name=:BatchName, 
										     batch_no=:BatchNo, 
										     trainer=:Trainer,
										     entry_date=:Date 
											 
								       WHERE  id = :uid');




		$stmt->bindParam(':BatchName', $BatchName);
		$stmt->bindParam(':BatchNo', $BatchNo);
		$stmt->bindParam(':Trainer', $Trainer);
		$stmt->bindParam(':Date', $Date);

		$stmt->bindParam(':uid', $id);

		if ($stmt->execute()) {
?>
			<script>
				alert(' Update Successfull... ');
				window.location.href = 'batch-no';
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
	<title>Expense </title>
	<link rel="stylesheet" href="css/buttons.css">
	<!-- custom stylesheet -->
	<link rel="stylesheet" href="style.css">

</head>

<body>


	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active">Batch Name/No. Edit </li>
			</ol>
		</h4>
	</center>
	<?php require_once 'student-info-left-menu-link.php'; ?>

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
						<td><label class="control-label">Batch Name</label></td>
						<td><input class="form-control" type="text" name="BatchName" value="<?php echo $batch_name; ?>"></td>
					</tr>


					<tr>
						<td><label class="control-label">Batch No.</label></td>
						<td><input class="form-control" type="text" name="BatchNo" value="<?php echo $batch_no; ?>"></td>
					</tr>

					<tr>
						<td><label class="control-label">Trainer Name </label></td>
						<td><input class="form-control" type="text" name="Trainer" value="<?php echo $trainer; ?>"></td>
					</tr>

					<tr>
						<td><label class="control-label">Date </label></td>
						<td><input class="form-control" type="text" name="Date" placeholder="" value="<?php echo $entry_date; ?>"></td>
					</tr>

					<tr>
						<td></td>
						<td></td>
					</tr>

				</table>
				<button type="submit" name="btn_save_updates" class="btn btn-primary"> <span class="glyphicon glyphicon-save"></span> Update </button>
				<a class="btn btn-danger" href="batch-no"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>


			</form>


	</div>

	<div class="col-md-12">
		<?php include('../includes/footer.php'); ?>

	</div>