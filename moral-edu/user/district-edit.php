<?php require_once 'header.php'; ?>

<?php


if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
	$id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT * FROM district WHERE id =:uid');
	$stmt_edit->execute(array(':uid' => $id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
} else {
	header("Location: district");
}



if (isset($_POST['btn_save_updates'])) {

	$DistName = $_POST['DistName'];

	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('UPDATE district 
									     SET dist_name=:DistName  
										      
								       WHERE  id = :uid');




		$stmt->bindParam(':DistName', $DistName);

		$stmt->bindParam(':uid', $id);

		if ($stmt->execute()) {
?>
			<script>
				alert(' Update Successful...');
				window.location.href = 'district';
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
	<title>ব্যয় </title>
	<link rel="stylesheet" href="css/buttons.css">
	<!-- custom stylesheet -->
	<link rel="stylesheet" href="style.css">

</head>

<body>


	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active">District Edit </li>
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
					<td><label class="control-label">District Name</label></td>
					<td><input class="form-control" type="text" name="DistName" placeholder="District Name" value="<?php echo $dist_name; ?>"></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
				</tr>

			</table>
			<tr>
				<td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
						<span class="glyphicon glyphicon-save"></span> Update
					</button>

					<a class="btn btn-danger" href="district"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>

				</td>
			</tr>

		</form>


	</div>


	<div class="col-md-12">
		<?php include('../includes/footer.php'); ?>

	</div>