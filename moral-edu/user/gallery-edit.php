<?php require_once 'header.php'; ?>
<?php
error_reporting(~E_NOTICE);
if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
	$customer_id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT * FROM gallery WHERE id =:uid');
	$stmt_edit->execute(array(':uid' => $customer_id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
} else {
	header("Location: index");
}



if (isset($_POST['btn_save_updates'])) {

	$Title = $_POST['Title'];


	$imgFile = $_FILES['user_image']['name'];
	$tmp_dir = $_FILES['user_image']['tmp_name'];
	$imgSize = $_FILES['user_image']['size'];

	if ($imgFile) {
		$upload_dir = 'user_images/'; // upload directory	
		$imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		$userpic = rand(1000, 1000000) . "." . $imgExt;
		if (in_array($imgExt, $valid_extensions)) {
			if ($imgSize < 5000000) {
				//unlink($upload_dir.$edit_row['userPic']);
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
		$stmt = $DB_con->prepare('UPDATE gallery 
									     SET title =:Title,
											 
										     userPic=:upic 
								       WHERE id=:uid');


		$stmt->bindParam(':Title', $Title);

		$stmt->bindParam(':upic', $userpic);
		$stmt->bindParam(':uid', $id);

		if ($stmt->execute()) {
?>
			<script>
				alert('Successfully Updated ...');
				window.location.href = 'gallery';
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
	<link rel="stylesheet" href="css/buttons.css">

	<!-- custom stylesheet -->
	<link rel="stylesheet" href="style.css">

</head>

<body>

	<center>
		<h3>
			<ol class="breadcrumb">
				<li class="active">Gallery Update</li>
			</ol>
		</h3>
	</center>

	<?php require_once 'website-info-left-menu-link.php'; ?>
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
					<td><label class="control-label"> Title</label></td>
					<td><input class="form-control" type="text" name="Title" placeholder=" Title" value="<?php echo $title; ?>" /></td>
				</tr>


				<tr>
					<td><label class="control-label"> Picture </label></td>
					<td>
						<p><img src="user_images/<?php echo $userPic; ?>" height="150" width="150" /></p>
						<input class="input-group" type="file" name="user_image" accept="image/*" />
					</td>
				</tr>

				<tr>
					<td></td>
					<td></td>
				</tr>
			</table>

			<button type="submit" name="btn_save_updates" class="btn btn-primary">
				<span class="glyphicon glyphicon-save"></span> Update
			</button>

			<a class="btn btn-danger" href="gallery"> <span class="glyphicon glyphicon-backward"></span> cancel </a>


		</form>

	</div>


	<div class="col-md-12">
		<?php include('../includes/footer.php'); ?>

	</div>