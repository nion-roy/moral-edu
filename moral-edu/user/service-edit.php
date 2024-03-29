<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once 'head_link.php'; ?>

</head>

<body>

	<?php require_once 'header1.php'; ?>
	<?php
	error_reporting(~E_NOTICE);
	if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM service WHERE sv_id =:uid');
		$stmt_edit->execute(array(':uid' => $id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	} 
	
	else {
		header("Location: index");
	}



	if (isset($_POST['btn_save_updates'])) {
		$ServName = $_POST['ServName'];
		$CourseFee = $_POST['CourseFee'];
		$Duration = $_POST['Duration'];
		$Semester = $_POST['Semester'];
		$Details = $_POST['Details'];
		$category_id = $_POST['category_id'];


		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];

		if ($imgFile) {
			$upload_dir = 'user_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic ="prince-" .rand(1000, 1000000). "-" .$imgFile; 
			//$userpic = rand(1000, 1000000) . "." . $imgExt;
			if (in_array($imgExt, $valid_extensions)) {
				if ($imgSize < 5000000) {
					unlink($upload_dir . $edit_row['userPic']);
					move_uploaded_file($tmp_dir, $upload_dir . $userpic);
				} else {
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			} else {
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
		} else {
			// if no image selected the old image remain as it is.
			$userpic = $edit_row['userPic']; // old image from database
		}


		// if no error occured, continue ....
		if (!isset($errMSG)) {
			$stmt = $DB_con->prepare('UPDATE service 
									     SET  sv_name =:ServName,
										  course_fee=:CourseFee,
										  duration=:Duration,
										  total_semester=:Semester,
											  sv_details=:Details,
										     category_id=:category_id,
										     userPic=:upic 
								       WHERE sv_id=:uid');

			$stmt->bindParam(':ServName', $ServName);
			
			$stmt->bindParam(':CourseFee', $CourseFee);
			$stmt->bindParam(':Duration', $Duration);
			$stmt->bindParam(':Semester', $Semester);
			
			$stmt->bindParam(':Details', $Details);
			$stmt->bindParam(':category_id', $category_id);

			$stmt->bindParam(':upic', $userpic);
			$stmt->bindParam(':uid', $id);

			if ($stmt->execute()) {
	?>
				<script>
					alert('Successfully Updated ...');
					window.location.href = 'service';
				</script>
	<?php
			} else {
				$errMSG = "Sorry Data Could Not Updated !";
			}
		}
	}

	?>

	<?php require_once 'sidebar.php'; ?>

	<main id="main" class="main">

		<div class="pagetitle">
			<h1>Course Edit / Update</h1>
			<hr>
		</div>

		<section class="section">
			<div class="row">
				<div class="col-lg-10">

					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
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

							</h5>

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

								<table class="table table-responsive">
									<tr>
										<td><label class="control-label"> Category </label></td>
										<td>
											<select name="category_id" id="" class="form-select">
												<option value="">Select Category</option>
												<?php
												$ct = mysqli_query($con, "SELECT * FROM service_category WHERE user_id='" . $_SESSION['id'] . "'");
												while ($category = mysqli_fetch_assoc($ct)) {
													echo '<option value="' . $category['cat_id'] . '"  ' . ($category_id == $category["cat_id"] ? "selected" : "") . '>' . $category['cat_name'] . '</option>';
												} ?>
											</select>
										</td>
									</tr>
									
									<tr>
										<td><label class="control-label">Course Name</label></td>
										<td><input class="form-control" type="text" name="ServName" placeholder="Course Name" value="<?php echo $sv_name; ?>" /></td>
									</tr>
									
									<tr>
										<td><label class="control-label"> Course Fee </label></td>
										<td><input class="form-control" type="text" name="CourseFee" placeholder="Course Fee" value="<?php echo $course_fee; ?>" required></td>
									</tr>
									
									<tr>
										<td><label class="control-label"> Duration </label></td>
										<td><input class="form-control" type="text" name="Duration" placeholder="Duration" value="<?php echo $duration; ?>" required></td>
									</tr>
									
									<tr>
										<td><label class="control-label"> Total Semester </label></td>
										<td><input class="form-control" type="text" name="Semester" placeholder="Total Semester" value="<?php echo $total_semester; ?>" required></td>
									</tr>


									<tr>
										<td><label class="control-label">Details</label></td>
										<td><textarea class="tinymce-editor" name="Details" placeholder="Details"><?php echo $sv_details; ?></textarea></td>
									</tr>


									<tr>
										<td><label class="control-label">Picture </label></td>
										<td>
											<p><img src="user_images/<?php echo $userPic; ?>" height="150" width="150" /></p>
											<input class="input-group" type="file" name="user_image" accept="image/*" />
										</td>
									</tr>


								</table>

								<tr>
									<td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
											<span class="glyphicon glyphicon-save"></span> Update
										</button>

										<a class="btn btn-danger" href="service"> <span class="glyphicon glyphicon-backward"></span> cancel </a>

									</td>
								</tr>

							</form>


						</div>
					</div>


				</div>


		</section>

	</main>

	<?php require_once 'footer1.php'; ?>



	<?php
	require_once 'summernote_link.php';
	summernote('summernote');
	?>