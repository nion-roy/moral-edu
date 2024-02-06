
<?php require_once 'header.php'; ?>

<?php 
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM expense 
		left join office_exp_name on office_exp_name.of_id=expense.expense_name
		WHERE expense.id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: expense.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		
		$ExpName = $_POST['ExpName'];
		$ExpDetails = $_POST['ExpDetails'];
		$Ammount = $_POST['Ammount'];
		$ExpCost = $_POST['ExpCost'];
		$Refer = $_POST['Refer'];
		$Date = $_POST['Date'];
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE expense 
									     SET expense_name=:ExpName, 
										     exp_details=:ExpDetails, 
										     ammount=:Ammount, 
										     expense_cost=:ExpCost, 
										     reference=:Refer,
										     entry_date=:Date 
											 
								       WHERE  id = :uid');
			
		
			
			
			$stmt->bindParam(':ExpName',$ExpName);
			$stmt->bindParam(':ExpDetails',$ExpDetails);
			$stmt->bindParam(':Ammount',$Ammount);
			$stmt->bindParam(':ExpCost',$ExpCost);
			$stmt->bindParam(':Refer',$Refer);
			$stmt->bindParam(':Date',$Date);
			
			$stmt->bindParam(':uid',$id);
			
			if($stmt->execute()){
				?>
                <script>
				alert('Update Successful...');
				window.location.href='expense';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}
		
		}
		
						
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ব্যয় </title>
<link rel="stylesheet" href="css/buttons.css">
<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">

</head>
<body>



<center><h4><ol class="breadcrumb"> <li class="active">Office Expense Edit </li></ol></h4></center>
<?php require_once 'expenses-info-left-menu-link.php'; ?>
<div class="col-md-8">
<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>
   
    
	<table class="table table-hover table-responsive">
	
    <tr>
    	<td><label class="control-label">Name </label>  </td>
        <td> 
		<select style="width:100%;" class="form-control chosen-select" Id="ExpName" name="ExpName" required="" >
		<option value="<?php echo $expense_name; ?>"><?php echo $name; ?></option>
		
				      	<?php 
				      	$sql = "SELECT of_id,name FROM office_exp_name where user_id='".$_SESSION['id']."'";
								$result = $con->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} 
				      	?>
	   </select> 
     </tr>
	
	 
	
	
	
	<tr>
    	<td><label class="control-label">Expense Details</label></td>
		<td><input class="form-control" type="text" name="ExpDetails" placeholder="Expense Details" value="<?php echo $exp_details; ?>"></td>
    </tr>
	
	
	<tr>
    	<td><label class="control-label">Ammount</label></td>
		<td><input class="form-control" type="text" name="Ammount" placeholder="Ammount" value="<?php echo $ammount; ?>"></td>
    </tr>
	
		
	<tr>
    	<td><label class="control-label">Taka</label></td>
        <td><input class="form-control" type="text" name="ExpCost" placeholder="Taka " value="<?php echo $expense_cost; ?>" ></td>
    </tr>
	
	<tr>
    	<td><label class="control-label">Reference </label></td>
		<td><input class="form-control" type="text" name="Refer" placeholder="Reference" value="<?php echo $reference; ?>" ></td>
    </tr>
	
	<tr>
    	<td><label class="control-label">Date </label></td>
		<td><input class="form-control" type="text" name="Date" placeholder="" value="<?php echo $entry_date ;?>" ></td>
    </tr>
    
	 <tr><td></td><td></td></tr>
    
    </table>
	
	<tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
        
        <a class="btn btn-danger" href="expense"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
</form>



</div>


<div class="col-md-12">
<?php include('../includes/footer.php'); ?>

</div>