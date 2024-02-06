<?php require_once 'header.php'; ?>

<?php
if (isset($_GET['delete_id'])) {
	// select image from db to delete
	$stmt_select = $DB_con->prepare('SELECT userPic FROM students WHERE student_id =:uid');
	$stmt_select->execute(array(':uid' => $_GET['delete_id']));
	$imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
	//unlink("user_images/".$imgRow['userPic']);

	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM students WHERE student_id =:uid');
	$stmt_delete->bindParam(':uid', $_GET['delete_id']);
	$stmt_delete->execute();

	//header("Location:students.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link rel="stylesheet" href="css/buttons.css">
	<link rel="stylesheet" href="css/table_data_center.css">
</head>

<body>

	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active">Students List </li>
			</ol>
		</h4>
	</center>
	<?php require_once 'student-info-left-menu-link.php'; ?>

	<div class="col-md-2">
		<a class="btn btn-primary" href="students-add"> <span class="glyphicon glyphicon-plus"></span> Add New </a>
		<br><br>
	</div>
	<?php require_once 'more-fals/search-box.php'; ?>


	<table width="100%" class="table  table-hover table-responsive" student_id="dataTables-example">
		<thead>

			<tr>

				<th>SL</th>
				<th>No</th>
				<th>Id</th>
				<th>Name</th>
				<th>Batch</th>
				<th>Course</th>
				<th>Institute</th>
				<th>Phone</th>
				<th>Village</th>
				<th>Photo</th>

				<th>Details</th>
				<th>Edit</th>
			</tr>
		</thead>
		
		
		<tbody id="tbody">
			<?php
			$sl = 0;
			$eq = mysqli_query($con, "select * from students  where status=1 and user_id='" . $_SESSION['id'] . "' ORDER BY student_id desc ");
			while ($eqrow = mysqli_fetch_array($eq)) {
			?>
				<tr>

					<td><?php echo ++$sl; ?></td>
					<td><?php echo $eqrow['student_no']; ?></td>
					<td><?php echo $eqrow['student_id']; ?></td>
					<td><?php echo $eqrow['student_name']; ?></td>
					<td><?php echo $eqrow['batch_no']; ?></td>
					<td><?php echo $eqrow['course_name']; ?></td>
					<td><?php echo $eqrow['institute_name']; ?></td>
					<td><?php echo $eqrow['student_phone']; ?></td>
					<td><?php echo $eqrow['pre_vill']; ?></td>
					<td> <img src="user_images/<?php echo $eqrow['userPic']; ?>" class="img-rounded" height="30px;" width="30px;" /></td>

					<td><a class="btn btn-info" href="students-details?edit_id=<?php echo $eqrow['student_id']; ?>" title="Click for Details"><span class="glyphicon glyphicon-edit"></span> Details</a> </td>
					<td><a class="btn btn-info" href="students-edit?edit_id=<?php echo $eqrow['student_id']; ?>" title="click for edit" onclick="return confirm('Are You Sure....?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>
					<!--    <td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['student_id']; ?>" title="click for delete" onclick="return confirm('Are You Sure....?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td> -->


				</tr>
			<?php
			}
			?>

		</tbody>
	</table>




	<div class="col-md-12">
		<?php include('../includes/footer.php'); ?>

	</div>