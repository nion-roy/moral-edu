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
	$StatsName = $_POST['StatsName'];
	$StatsNum = $_POST['StatsNum'];



	if (empty($StatsName)) {
		$errMSG = "Please Enter Stats Name.";
	}




	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('INSERT INTO stats (user_id,st_name,st_num) 
												VALUES(:UserId,:StatsName,:StatsNum)');


		$stmt->bindParam(':UserId', $UserId);
		$stmt->bindParam(':StatsName', $StatsName);
		$stmt->bindParam(':StatsNum', $StatsNum);


		if ($stmt->execute()) {
?>
			<script>
				alert(' Data Add Successful...');
				window.location.href = 'stats';
			</script>
<?php
		}

		else {
			$errMSG = "error while inserting....";
		}
	}
}
?>

<?php  require_once 'sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add New Stats |  <span> <a href="Stats">    <i class="bi bi-table"></i> </a> </span> </h1>
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
					<td><label class="control-label">Stats Name</label></td>
					<td><input class="form-control" type="text" name="StatsName" placeholder="Stats Name"></td>
				</tr>
				
				<tr>
					<td><label class="control-label">Stats Number</label></td>
					<td><input class="form-control" type="text" name="StatsNum" placeholder="Stats Number"></td>
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