<!DOCTYPE html>
<html lang="en"> 

<head>
<?php   require_once 'head_link.php'; ?>

</head>

<body>
 
<?php   require_once 'header1.php'; ?> 

<?php

if (isset($_GET['delete_id'])) {

	// it will delete an actual record from db
	$stmt_delete = $DB_con->prepare('DELETE FROM branch WHERE br_id =:uid');
	$stmt_delete->bindParam(':uid', $_GET['delete_id']);
	$stmt_delete->execute();

	//header("Location:group.php");
}

?>

<?php  require_once 'sidebar.php'; ?>


  <main id="main" class="main">

    <div class="pagetitle">
     <h1> Branch List  |  <span> <a href="Branch-add">   <i class="bi bi-plus-square-fill"></i> </a> </span> </h1>
       <hr>
    </div> 

    <section class="section">
      <div class="row">
	  
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             
              <table class="table table-hover datatable">
                <thead>
			<tr>
				<th>SL</th>
				<th>Branch Name</th>
				<th>Branch Address</th>
				<th>Contact No.</th>
				<th>E-mail</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			</thead>
						
           <tbody id="tbody">
			<?php
			$sl = 0;
			$eq = mysqli_query($con, "select * from branch WHERE user_id='" . $_SESSION['id'] . "'  ORDER BY br_id desc ");
			while ($eqrow = mysqli_fetch_array($eq)) {

			?>
				<tr>


					<td><?php echo ++$sl; ?></td>
					<td><?php echo $eqrow['br_name']; ?></td>
					<td><?php echo $eqrow['br_address']; ?></td>
					<td><?php echo $eqrow['br_contact']; ?></td>
					<td><?php echo $eqrow['br_mail']; ?></td>


					<td><a class="btn btn-info" href="branch-edit?edit_id=<?php echo $eqrow['br_id']; ?>" title="click for edit" onclick="return confirm('Do You Want To Edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> </td>
					<td><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['br_id']; ?>" title="click for delete" onclick="return confirm('Are You Sure....?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a> </td>

				</tr>
			<?php
			}
			?>

		</tbody>
              </table>
            
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  
  <?php  require_once 'footer1.php'; ?>