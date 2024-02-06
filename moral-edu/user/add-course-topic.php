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
	$CrseName = $_POST['CrseName'];
	$Topic = $_POST['Topic'];

	if (empty($CrseName)) {
		$errMSG = "Please Enter Course Name.";
	}




	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO crse_topic (user_id,crse_name,topic,status) VALUES(:UserId,:CrseName,:Topic,1)');


		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':CrseName', $CrseName);
		$stmt->bindParam(':Topic', $Topic);


		if ($stmt->execute()) {
			$successMSG = "Data Add Successful...";
			//header("refresh:2; expense.php"); // redirects image view page after 5 seconds.
		} else {
			$errMSG = "error while inserting....";
		}
	}
}
?>
<?php  require_once 'sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add New Course Topic |  <span> <a href="course-topic">    <i class="bi bi-table"></i> </a> </span> </h1>
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
					$pq = mysqli_query($con, "select * from user where userid='" . $_SESSION['id'] . "'");
					while ($pqrow = mysqli_fetch_array($pq)) {
					?>

						<input class="form-control" type="hidden" name="UserId" value="<?php echo $pqrow['userid']; ?>" />
					<?php } ?>
				</tr>





				<tr>
					<td><label class="control-label">Course Name </label> </td>
					<td>
						<select style="width:100%;" class="form-control chosen-select" Id="CrseName" name="CrseName" required="">
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
					<td><label class="control-label">Topic</label></td>
					<td><input class="form-control" type="text" name="Topic" placeholder="Topic"></td>
				</tr>

			

			</table>
			
			<button type="submit" name="btnsave" class="btn btn-primary">
				<span class="glyphicon glyphicon-save"></span> &nbsp; Save
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