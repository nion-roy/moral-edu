<?php require_once 'header.php'; ?>
<?php

error_reporting(~E_NOTICE); // avoid notice
if (isset($_POST['btnsave'])) {


	$user_id = $_POST['user_id'];

	$AboutTitle = $_POST['AboutTitle'];
	$AboutSubTitle = $_POST['AboutSubTitle'];


	$imgFile = $_FILES['user_image']['name'];
	$tmp_dir = $_FILES['user_image']['tmp_name'];
	$imgSize = $_FILES['user_image']['size'];


	if (empty($AboutTitle)) {
		$errMSG = "Please Enter About Title.";
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
		$stmt = $DB_con->prepare('INSERT INTO about_section (user_id,about_title,about_subtitle,userPic) 
															VALUES(:user_id,:AboutTitle,:AboutSubTitle,:upic)');



		$stmt->bindParam(':user_id', $user_id);

		$stmt->bindParam(':AboutTitle', $AboutTitle);
		$stmt->bindParam(':AboutSubTitle', $AboutSubTitle);

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

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>

<body>




	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active"> Add New About </li>
			</ol>
		</h4>
	</center>


	<h1 class="h2">&nbsp;<a class="btn btn-default" href="about-section-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a> <a class="btn btn-default" href="about_section.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View </a></h1>

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
				<td><label class="control-label"> About Title </label></td>
				<td><input class="form-control" type="text" name="AboutTitle" placeholder="About Title" value="<?php echo $AboutTitle; ?>" /></td>
			</tr>

			<tr>
				<td><label class="control-label"> About Sub Title </label></td>
				<td><textarea style="height:150px; width:100%;" class="form-control" name="AboutSubTitle" placeholder="Please Write Here " value="<?php echo $AboutSubTitle; ?>"></textarea></td>

			</tr>


			<tr>
				<td><label class="control-label">About Picture </label></td>
				<td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
			</tr>

			<tr>
				<td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
						<span class="glyphicon glyphicon-save"></span> &nbsp; save
					</button>
				</td>
			</tr>

		</table>

	</form>

	<div class="col-md-2">
<a class="btn btn-primary" href="students-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
<br><br>
</div>

<?php require_once 'more-fals/search-box.php'; ?>