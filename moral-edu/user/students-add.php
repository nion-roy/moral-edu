<?php require_once 'header.php'; ?>


<?php
if (isset($_POST['btnsave'])) {
	$UserId = $_POST['UserId'];
	$StudentNo = $_POST['StudentNo'];
	$BatchNo = $_POST['BatchNo'];
	$CourseName = $_POST['CourseName'];
	$StudentName = $_POST['StudentName'];
	$Gender = $_POST['Gender'];
	$BldGrp = $_POST['BldGrp'];
	$FatherName = $_POST['FatherName'];
	$MotherName = $_POST['MotherName'];

	$PreVill = $_POST['PreVill'];
	$PrePost = $_POST['PrePost'];
	$PreUpazila = $_POST['PreUpazila'];
	$PreDistrict = $_POST['PreDistrict'];

	$ParVill = $_POST['ParVill'];
	$ParPost = $_POST['ParPost'];
	$ParUpazila = $_POST['ParUpazila'];
	$ParDistrict = $_POST['ParDistrict'];

	$MrgInfo = $_POST['MrgInfo'];
	$Religion = $_POST['Religion'];
	$Nation = $_POST['Nation'];
	$BirthDate = $_POST['BirthDate'];
	$StuPhn = $_POST['StuPhn'];
	$StuEmail = $_POST['StuEmail'];
	$GuarPhn = $_POST['GuarPhn'];

	$Degree = $_POST['Degree'];
	$Institute = $_POST['Institute'];
	$BoardRoll = $_POST['BoardRoll'];
	$PasYear = $_POST['PasYear'];
	$Gpa = $_POST['Gpa'];
	$BoardName = $_POST['BoardName'];

	$Refer = $_POST['Refer'];

	$Date = $_POST['Date'];

	$imgFile = $_FILES['user_image']['name'];
	$tmp_dir = $_FILES['user_image']['tmp_name'];
	$imgSize = $_FILES['user_image']['size'];


	if (empty($StudentNo)) {
		$errMSG = "Please Enter StudentNo.";
	} else if (empty($StudentName)) {
		$errMSG = "Please Enter StudentName.";
	} else if (empty($StuPhn)) {
		$errMSG = "Please Enter Phone Number.";
	} else {
		$upload_dir = 'user_images/'; // upload directory

		$imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

		// valid image extensions
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

		// rename uploading image
		//$userpic = rand(1000,1000000).".".$imgExt;
		$userpic = "itm-dtc-" . $imgFile;

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
		$stmt = $DB_con->prepare('INSERT INTO students (user_id,student_no,batch_no,course_name,student_name,gender,bld_grp,father_name,mother_name,pre_vill,pre_post,pre_upazila,pre_dist,par_vill,par_post,par_upazila,par_dist,marriage_info,religion,nationality,birth_date,student_phone,student_email,guardian_phone,degree,institute_name,board_roll,pass_year,gpa,board_name,reference,join_date,status,userPic)
			                                         VALUES(:UserId,:StudentNo,:BatchNo,:CourseName,:StudentName, :Gender,:BldGrp,:FatherName,:MotherName,:PreVill,:PrePost,:PreUpazila,:PreDistrict,:ParVill,:ParPost,:ParUpazila,:ParDistrict,:MrgInfo,:Religion,:Nation,:BirthDate,:StuPhn,:StuEmail,:GuarPhn,:Degree,:Institute,:BoardRoll,:PasYear,:Gpa,:BoardName,:Refer, :Date,1,:upic)');

		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':StudentNo', $StudentNo);
		$stmt->bindParam(':BatchNo', $BatchNo);
		$stmt->bindParam(':CourseName', $CourseName);
		$stmt->bindParam(':StudentName', $StudentName);
		$stmt->bindParam(':Gender', $Gender);
		$stmt->bindParam(':BldGrp', $BldGrp);
		$stmt->bindParam(':FatherName', $FatherName);
		$stmt->bindParam(':MotherName', $MotherName);

		$stmt->bindParam(':PreVill', $PreVill);
		$stmt->bindParam(':PrePost', $PrePost);
		$stmt->bindParam(':PreUpazila', $PreUpazila);
		$stmt->bindParam(':PreDistrict', $PreDistrict);

		$stmt->bindParam(':ParVill', $ParVill);
		$stmt->bindParam(':ParPost', $ParPost);
		$stmt->bindParam(':ParUpazila', $ParUpazila);
		$stmt->bindParam(':ParDistrict', $ParDistrict);

		$stmt->bindParam(':MrgInfo', $MrgInfo);
		$stmt->bindParam(':Religion', $Religion);
		$stmt->bindParam(':Nation', $Nation);
		$stmt->bindParam(':BirthDate', $BirthDate);
		$stmt->bindParam(':StuPhn', $StuPhn);
		$stmt->bindParam(':StuEmail', $StuEmail);
		$stmt->bindParam(':GuarPhn', $GuarPhn);

		$stmt->bindParam(':Degree', $Degree);
		$stmt->bindParam(':Institute', $Institute);
		$stmt->bindParam(':BoardRoll', $BoardRoll);
		$stmt->bindParam(':PasYear', $PasYear);
		$stmt->bindParam(':Gpa', $Gpa);
		$stmt->bindParam(':BoardName', $BoardName);

		$stmt->bindParam(':Refer', $Refer);
		$stmt->bindParam(':Date', $Date);
		$stmt->bindParam(':upic', $userpic);

		if ($stmt->execute()) {
?>
			<script>
				alert('Student Data Successfully Add ...');
				window.location.href = 'students-add';
			</script>
<?php

		} else {
			$errMSG = "error while inserting....";
		}
	}
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/buttons.css">

</head>

<body>


	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active"> New Student </li>
			</ol>
		</h4>
	</center>

	<?php require_once 'student-info-left-menu-link.php'; ?>

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

						<input class="form-control" type="hidden" name="UserId" value="<?php echo $pqrow['userid']; ?>" />
					<?php } ?>
				</tr>

				<tr>
					<?php	//  একই সাথে  Order Due এ ডাটা পাঠানোর জন্য //

					$pq = mysqli_query($con, "select MAX(student_id)+1 as max_id from students ");
					while ($pqrow = mysqli_fetch_array($pq)) {
					?>

						<input class="form-control" type="hidden" name="StudentId" value="<?php echo $pqrow['max_id']; ?>" />
					<?php } ?>

				</tr>

				<tr>
					<td><label class="control-label">Batch </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="BatchNo" name="BatchNo" required="">
							<option value="#">Select Batch</option>

							<?php
							$sql = "SELECT id,batch_name FROM batch where  user_id='" . $_SESSION['id'] . "'";
							$result = $con->query($sql);

							while ($row = $result->fetch_array()) {
								echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							?>
						</select>
				</tr>



				<tr>
					<td><label class="control-label">Course Name </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="CourseName" name="CourseName" required="">
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
					<td><label class="control-label">Student No </label></td>
					<?php	// Auto Customer No

					$pq = mysqli_query($con, "select MAX(student_no)+1 as max_id from students  where user_id='" . $_SESSION['id'] . "'");
					while ($pqrow = mysqli_fetch_array($pq)) {
					?>

						<td>
							<input class="form-control" type="text" name="StudentNo" value="<?php echo $pqrow['max_id']; ?>" />
						</td>
					<?php } ?>

				</tr>


				<tr>
					<td><label class="control-label">Student Name </label></td>
					<td><input class="form-control" type="text" name="StudentName" placeholder="Student Name" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Gender </label></td>
					<td>
						<select style="width:100%;" class="form-control" name="Gender">
							<option value="Male">Male </option>
							<option value="Female">Female </option>
							<option value="Other">Other </option>
						</select>
					</td>
				</tr>

				<tr>
					<td><label class="control-label">Blood Group </label></td>
					<td>
						<select style="width:100%;" class="form-control" name="BldGrp">
							<option value="">Select </option>
							<option value="A+">A+ </option>
							<option value="O+">O+ </option>
							<option value="B+">B+ </option>
						</select>
					</td>
				</tr>

				<tr>
					<td><label class="control-label">Father Name </label></td>
					<td><input class="form-control" type="text" name="FatherName" placeholder="Father Name" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Mother Name </label></td>
					<td><input class="form-control" type="text" name="MotherName" placeholder="Mother Name" /></td>
				</tr>

				<tr>
					<td colspan="2">
						<center><label class="control-label"> Present Address </label></center>
					</td>
				</tr>

				<tr>
					<td><label class="control-label">Village </label></td>
					<td><input class="form-control" type="text" id="PreVill" name="PreVill" placeholder="Village" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Post Office</label></td>
					<td><input class="form-control" type="text" name="PrePost" placeholder="Post Office" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Upazilla Name </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="PreUpazila" name="PreUpazila" required="">
							<option value="#">Select Upazilla</option>

							<?php
							$sql = "SELECT id ,upazila_name FROM upazila where  user_id='" . $_SESSION['id'] . "'";
							$result = $con->query($sql);

							while ($row = $result->fetch_array()) {
								echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							?>
						</select>
				</tr>

				<tr>
					<td><label class="control-label">District Name </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="PreDistrict" name="PreDistrict" required="">
							<option value="#">Select District</option>

							<?php
							$sql = "SELECT id ,dist_name FROM district where  user_id='" . $_SESSION['id'] . "'";
							$result = $con->query($sql);

							while ($row = $result->fetch_array()) {
								echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							?>
						</select>
				</tr>

				<!--Permanent Address-->

				<tr>
					<td colspan="2">
						<center><label class="control-label"> Permanent Address </label></center>
					</td>
				</tr>

				<tr>
					<td><label class="control-label">Village </label></td>
					<td><input class="form-control" type="text" id="ParVill" name="ParVill" placeholder="Village" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Post Office</label></td>
					<td><input class="form-control" type="text" name="ParPost" placeholder="Post Office" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Upazilla Name </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="ParUpazila" name="ParUpazila" required="">
							<option value="#">Select Upazilla</option>

							<?php
							$sql = "SELECT id ,upazila_name FROM upazila where  user_id='" . $_SESSION['id'] . "'";
							$result = $con->query($sql);

							while ($row = $result->fetch_array()) {
								echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							?>
						</select>
				</tr>


				<tr>
					<td><label class="control-label">District Name </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="ParDistrict" name="ParDistrict" required="">
							<option value="#">Select District</option>

							<?php
							$sql = "SELECT id ,dist_name FROM district where  user_id='" . $_SESSION['id'] . "'";
							$result = $con->query($sql);

							while ($row = $result->fetch_array()) {
								echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							?>
						</select>
				</tr>

				<tr>
					<td colspan="2">
						<center><label class="control-label"> </label></center>
					</td>
				</tr>

				<tr>
					<td><label class="control-label">Marriage Info</label></td>
					<td><select style="width:100%;" class="form-control" name="MrgInfo">
							<option value="Yes">Yes</option>
							<option value="No">No </option>
						</select> </td>
				</tr>

				<tr>
					<td><label class="control-label">Religion</label></td>
					<td><select style="width:100%;" class="form-control" name="Religion">
							<option value="Muslim">Muslim</option>
							<option value="Hindu">Hindu </option>
							<option value="Christian">Christian </option>
							<option value="Buddha">Buddha </option>
							<option value="Other">Other </option>
						</select> </td>
				</tr>

				<tr>
					<td><label class="control-label">Nationality</label></td>
					<td><select style="width:100%;" class="form-control" name="Nation">
							<option value="Bangladeshi">Bangladeshi</option>
							<option value="Other">Other </option>
						</select> </td>
				</tr>

				<tr>
					<td><label class="control-label">Date Of Birth </label></td>
					<td><input class="form-control" type="text" name="BirthDate" placeholder="Date Of Birth" value="<?php date_default_timezone_set("Asia/Dhaka");
																																																					echo date("Y/m/d"); ?>" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Student Phone </label></td>
					<td><input class="form-control" type="text" name="StuPhn" placeholder="Student Phone Number" /></td>
				</tr>

				<tr>
					<td><label class="control-label">E-Mail </label></td>
					<td><input class="form-control" type="text" name="StuEmail" placeholder="E-mail" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Guardian Phone </label></td>
					<td><input class="form-control" type="text" name="GuarPhn" placeholder="Guardian Phone Number" /></td>
				</tr>

				<tr>
					<td colspan="2">
						<center><label class="control-label"> Educational Background </label></center>
					</td>
				</tr>

				<tr>
					<td><label class="control-label">Degree </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="Degree" name="Degree" required="">
							<option value="#">Select Degree</option>

							<?php
							$sql = "SELECT deg_id,deg_name FROM degree where  user_id='" . $_SESSION['id'] . "'";
							$result = $con->query($sql);

							while ($row = $result->fetch_array()) {
								echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							?>
						</select>
				</tr>

				<tr>
					<td><label class="control-label">School/College/University</label></td>
					<td><input class="form-control" type="text" name="Institute" placeholder="School/College/University" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Board Roll </label></td>
					<td><input class="form-control" type="text" name="BoardRoll" placeholder="Board Roll" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Passing Year </label></td>
					<td><input class="form-control" type="text" name="PasYear" placeholder="Passing Year" /></td>
				</tr>

				<tr>
					<td><label class="control-label">GPA</label></td>
					<td><input class="form-control" type="text" name="Gpa" placeholder="GPA" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Board </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="BoardName" name="BoardName" required="">
							<option value="#">Select Board</option>

							<?php
							$sql = "SELECT brd_id,brd_name FROM board where  user_id='" . $_SESSION['id'] . "'";
							$result = $con->query($sql);

							while ($row = $result->fetch_array()) {
								echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
							}
							?>
						</select>
				</tr>

				<tr>
					<td colspan="2">
						<center><label class="control-label"> </label></center>
					</td>
				</tr>

				<tr>
					<td><label class="control-label">Reference ( Name/Phone/Address )</label></td>
					<td><input class="form-control" type="text" name="Refer" placeholder="Reference (Name/Phone/Address)" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Entry Date </label></td>
					<td><input class="form-control" type="text" name="Date" value="<?php date_default_timezone_set("Asia/Dhaka");
																																					echo date("Y/m/d"); ?>" /></td>
				</tr>

				<tr>
					<td><label class="control-label">Photo </label></td>
					<td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
				</tr>

			</table>

			<button type="submit" name="btnsave" class="btn btn-primary">
				<span class="glyphicon glyphicon-save"></span> &nbsp;Save
			</button>
		</form>

	</div>

	<div class="col-md-12">
		<?php include('../includes/footer.php'); ?>
	</div>