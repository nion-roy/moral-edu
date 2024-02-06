<?php require_once 'header.php'; ?>
<?php

error_reporting(~E_NOTICE); // avoid notice
if (isset($_POST['btnsave'])) {


	$user_id = $_POST['user_id'];

	$SliderTitle = $_POST['SliderTitle'];
	$SliderSubTitle = $_POST['SliderSubTitle'];


	$imgFile = $_FILES['user_image']['name'];
	$tmp_dir = $_FILES['user_image']['tmp_name'];
	$imgSize = $_FILES['user_image']['size'];


	if (empty($SliderTitle)) {
		$errMSG = "Please Enter SliderTitle.";
	} else {
		$upload_dir = 'user_images/'; // upload directory

		$imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

		// valid image extensions
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

		// rename uploading image
		$userpic = rand(1000, 1000000) . "." . $imgExt;

		// allow valid image file formats
		if (in_array($imgExt, $valid_extensions)) {
			// Check file size '5MB'
			if ($imgSize < 5000000) {
				move_uploaded_file($tmp_dir, $upload_dir . $userpic);
			} else {
				$errMSG = "Sorry, your file is too large.";
			}
		}
		//else{
		//	$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
		//}
	}


	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO slider_section (user_id,slider_title,slider_subtitle,userPic) 
															VALUES(:user_id,:SliderTitle,:SliderSubTitle,:upic)');



		$stmt->bindParam(':user_id', $user_id);

		$stmt->bindParam(':SliderTitle', $SliderTitle);
		$stmt->bindParam(':SliderSubTitle', $SliderSubTitle);

		$stmt->bindParam(':upic', $userpic);

		if ($stmt->execute()) {
			$successMSG = " New Customer Add Succesfully  ...";
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
				<li class="active"> Add New Slider </li>
			</ol>
		</h4>
	</center>

	<?php require_once 'website-info-left-menu-link.php'; ?>


	<!-- <h1 class="h2">&nbsp;<a class="btn btn-default" href="slider-section-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
		<a class="btn btn-default" href="slider-section"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View </a>
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

					$pq = mysqli_query($con, "select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='" . $_SESSION['id'] . "'");
					while ($pqrow = mysqli_fetch_array($pq)) {
					?>

						<input class="form-control" type="hidden" name="user_id" value="<?php echo $pqrow['userid']; ?>" />
					<?php } ?>
				</tr>


				<tr>
					<td><label class="control-label"> Slider Title </label></td>
					<td><input class="form-control" type="text" name="SliderTitle" placeholder="Slider Title" value="<?php echo $SliderTitle; ?>" /></td>
				</tr>

				<tr>
					<td><label class="control-label"> Slider Sub Title </label></td>
					<td><input class="form-control" type="text" name="SliderSubTitle" placeholder="Slider Sub Title" value="<?php echo $SliderSubTitle; ?>" /></td>
				</tr>


				<tr>
					<td><label class="control-label">Slider Picture </label></td>
					<td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
				</tr>

			</table>
			<tr>
				<td colspan="2"><button type="submit" name="btnsave" class="btn btn-primary">
						<span class="glyphicon glyphicon-save"></span> &nbsp; save
					</button>
				</td>
			</tr>

		</form>
	</div>


	<div class="col-md-12">
		<?php include('../includes/footer.php'); ?>

	</div>