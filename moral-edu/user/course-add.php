<!DOCTYPE html>
<html lang="en">

<head>
<?php   require_once 'head_link.php'; ?>

</head>

<body>
 
<?php   require_once 'header1.php'; ?> 

<?php
if (isset($_POST['btnsave'])) {
	$UserId = $_POST['UserId'];
	$CourseName = $_POST['CourseName'];
	$Quantity = $_POST['Quantity'];
	$Duration = $_POST['Duration'];
	$CourseFee = $_POST['CourseFee'];
	$MyCost = $_POST['MyCost'];
	$Date = $_POST['Date'];

	$imgFile = $_FILES['user_image']['name'];
	$tmp_dir = $_FILES['user_image']['tmp_name'];
	$imgSize = $_FILES['user_image']['size'];

	if (empty($CourseName)) {
		$errMSG = "Please Enter Product Id And Click Ok.";
	} else if (empty($Quantity)) {
		$errMSG = "Please Enter Quantity .";
	} else {
		$upload_dir = 'assests/images/stock/'; // upload directory

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
		$stmt = $DB_con->prepare('INSERT INTO product (user_id,product_name,product_image,quantity,duration,course_fee,my_cost,entry_date) 
			        VALUES(:UserId,:CourseName,:upic,:Quantity,:Duration,:CourseFee,:MyCost,:Date )');


		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':CourseName', $CourseName);
		$stmt->bindParam(':Quantity', $Quantity);
		$stmt->bindParam(':Duration', $Duration);
		$stmt->bindParam(':CourseFee', $CourseFee);
		$stmt->bindParam(':MyCost', $MyCost);
		$stmt->bindParam(':Date', $Date);

		$stmt->bindParam(':upic', $userpic);

		if ($stmt->execute()) {
?>
			<script>
				alert('Data Successfully Add ...');
				window.location.href = 'course-list';
			</script>
<?php
		} else {
			$errMSG = "error while inserting....";
		}
	}
}
?>

<?php  require_once 'sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add New Course |  <span> <a href="course-list">    <i class="bi bi-table"></i> </a> </span> </h1>
	  <hr>
    </div> 
	
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
			  <?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>  
			  
</h5>
			  
		<form method="post" enctype="multipart/form-data" class="form-horizontal">

			<table class="table table-hover table-responsive">

				<tr>

					<?php


					$pq = mysqli_query($con, "select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='" . $_SESSION['id'] . "'");
					while ($pqrow = mysqli_fetch_array($pq)) {
					?>

						<input class="form-control" type="hidden" name="UserId" value="<?php echo $pqrow['userid']; ?>" />
					<?php } ?>
				</tr>



				<tr>
					<td><label class="control-label">Course Name</label></td>
					<td><input class="form-control" type="text" id="CourseName" name="CourseName" placeholder="Course Name" /></td>
				</tr>

				<tr style="display:none;">
					<td><label class="control-label"> Quantity </label></td>
					<td><input class="form-control" type="text" id="Quantity" name="Quantity" placeholder="Quantity Number" value="1" oninput="myFunctionTP()" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Course Duration </label></td>
					<td>
						<input class="form-control" type="text" id="Duration" name="Duration" placeholder="Duration" />
					</td>
				</tr>

				<tr>
					<td><label class="control-label">Course Fee</label></td>
					<td>
						<input class="form-control" type="text" id="CourseFee" name="CourseFee" placeholder="Course Fee" />
					</td>
				</tr>

				<tr>
					<td><label class="control-label">My Cost</label></td>
					<td>
						<input class="form-control" type="text" id="MyCost" name="MyCost" placeholder="My Cost" />
					</td>
				</tr>



				<tr style="display:none;">
					<td><label class="control-label">Photo </label></td>
					<td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
				</tr>

				<tr style="display:none;">
					<td><label class="control-label">Date</label></td>
					<td><input class="form-control" type="text" name="Date" placeholder="Date" value="<?php echo date("Y/m/d"); ?>" /></td>
				</tr>

				
			</table>

			<button type="submit" name="btnsave" class="btn btn-primary">
				<span class="glyphicon glyphicon-save"></span> &nbsp; save
			</button>

		</form>


            </div>
          </div>

          
        </div>

       
    </section>

  </main> 

    <?php  require_once 'footer1.php'; ?>
	
	
<script src = "js/chosen.js"></script>
<script type = "text/javascript">
	$('.chosen-select').chosen({width: "100%"});
</script>