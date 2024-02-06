<?php require_once 'header.php'; ?>

<?php
if (isset($_POST['btnsave'])) {

	$UserId = $_POST['UserId'];
	$StudentId = $_POST['StudentId'];
	$Date = $_POST['Date'];


	if (empty($StudentId)) {
		$errMSG = "Please Select Student Name.";
	} else if (empty($StudentId)) {
		$errMSG = "Please Select Student Name.";
	}

	if (isset($_POST['StudentId']) && $_POST['StudentId'] != '') {
		$StudentId = $_POST['StudentId'];
		$checkQuery = mysqli_query($con, "SELECT * FROM `orders_dues` WHERE `student_id`='$StudentId' ");
		if (mysqli_num_rows($checkQuery) > 0) {
			$errMSG = "This Students Already Exist In Payment !";
		}


		// if no error occured, continue ....
		if (!isset($errMSG)) {
			$stmt = $DB_con->prepare('INSERT INTO orders_dues (user_id,order_id,student_id,order_date,last_update,pre_due,today_total,grand_total,paid,recent_due,causes,dues_or_paid_status ) 
			VALUES(:UserId,0,:StudentId,:Date,:Date,"0","0","0","0","0","New Student",1 )');

			$stmt->bindParam(':UserId', $UserId);
			$stmt->bindParam(':StudentId', $StudentId);
			$stmt->bindParam(':Date', $Date);

			if ($stmt->execute()) {
?>
				<script>

				</script>
<?php
			} else {
				$errMSG = "error while inserting....";
			}
		}
	}
}
?>


<?php
if (isset($_POST['btnsave'])) {

	$UserId = $_POST['UserId'];
	$StudentId = $_POST['StudentId'];
	$Date = $_POST['Date'];


	if (empty($StudentId)) {
		$errMSG = "Please Select Student Name.";
	} else if (empty($StudentId)) {
		$errMSG = "Please Select Student Name.";
	}


	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO orders_details (user_id,order_id,student_id,order_date,pre_due,today_total,grand_total,paid,recent_due,causes,order_type ) 
			VALUES(:UserId,0,:StudentId,:Date,"0","0","0","0","0","New Student",1 )');

		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':StudentId', $StudentId);
		$stmt->bindParam(':Date', $Date);

		if ($stmt->execute()) {
?>
			<script>
				alert('New Student Add To Payment Successful.');
				window.location.href = 'payment_add.php';
			</script>
<?php
		} else {
			$errMSG = "error while inserting....";
		}
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/buttons.css">
	<link rel="stylesheet" type="text/css" href="css/chosen.css" />
</head>

<body>
	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active"> Payment Add</li>
			</ol>
		</h4>
	</center>
	<?php require_once 'payment-info-left-menu-link.php'; ?>
	<!-- <h1 class="h2"> <a class="btn btn-success" href="payment"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View </a></h1> -->
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

			<?php
			$pq = mysqli_query($con, "select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='" . $_SESSION['id'] . "' ");
			while ($pqrow = mysqli_fetch_array($pq)) {
			?>
				<input class="form-control" type="hidden" name="UserId" value="<?php echo $pqrow['userid']; ?>" />
			<?php } ?>


			<tr>
				<td><label class="control-label">Select Student</label> </td>
				<td>
					<select style="width:100%;" class="form-control chosen-select " Id="StuId" name="StuId" required="">
						<option value="#">Select Name</option>
						<?php
						$sql = "SELECT  student_id,student_name FROM students where user_id='" . $_SESSION['id'] . "' ";
						$result = $con->query($sql);

						while ($row = $result->fetch_array()) {
							echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
						}
						?>
					</select>
				</td>
			</tr>


			<tr>
				<td><label class="control-label">Student Name</label></td>
				<td><input class="form-control" type="text" id="StudentName1" name="StudentName1" placeholder="Student Name" disabled="true" />
					<input class="form-control" type="hidden" id="StudentId" name="StudentId" />
			</tr>



			<tr>
				<td><label class="control-label"> Phone Number</label></td>
				<td><input class="form-control" type="text" id="StuPhone" name="StuPhone" placeholder="Student Phone" /></td>
			</tr>

			<tr>
				<td><label class="control-label"> BatchNo</label></td>
				<td><input class="form-control" type="text" id="BatchNo" name="BatchNo" placeholder="Batch No" /></td>
			</tr>



			<tr>
				<td><label class="control-label"> Course Name</label></td>
				<td><input class="form-control" type="text" id="CourseName" name="CourseName" placeholder="Course Name" /></td>
			</tr>


			<tr>
				<td><label class="control-label">Date</label></td>
				<td><input class="form-control" type="text" name="Date1" placeholder="Date" value="<?php echo date("m/d/Y"); ?>" disabled="true" />
					<input class="form-control" type="hidden" name="Date" placeholder="Date" value="<?php echo date("Y/m/d"); ?>" />
				</td>
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

	<!-- Latest compiled and minified JavaScript -->


	<script>
		$("#StuId").on("change", function() {

			var StudentID = $("#StuId").val();
			if (StudentID == "") {
				alert("Please enter a valid Student ID!");
			} else {
				$.ajax({
					url: "ajax_load_payment.php?c=" + StudentID,
					success: function(result) {
						var Student = JSON.parse(result);

						$("#StudentId").val(Student.StId);
						$("#StudentName1").val(Student.Name);
						$("#StudentName").val(Student.Name);
						$("#BatchNo").val(Student.Batch);
						$("#CourseName").val(Student.Course);
						$("#StuPhone").val(Student.StPhone);




					}
				});
			}
		});
	</script>

	<script src="js/chosen.js"></script>
	<script type="text/javascript">
		$('.chosen-select').chosen({
			width: "100%"
		});
	</script>