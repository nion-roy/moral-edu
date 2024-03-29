
<?php require_once 'header.php'; ?>

<?php 
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM product WHERE product_id=:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: productN.php");
	}

	if(isset($_POST['btn_save_updates']))
	{
		
		//$Product_Code = $_POST['Product_Code'];
		$Product_Name = $_POST['Product_Name'];
		 
		$SaleRate = $_POST['SaleRate']; 
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE product 
									   SET   product_name=:Product_Name,
										     rate=:SaleRate 
											 
								       WHERE  product_id = :uid');
			
			//$stmt->bindParam(':Product_Code',$Product_Code);
			$stmt->bindParam(':Product_Name',$Product_Name);
			 
			$stmt->bindParam(':SaleRate',$SaleRate); 
			
			$stmt->bindParam(':uid',$id);
			
			if($stmt->execute()){
				?>
                <script>
				alert('Data Successfully Add ...');
				window.location.href='productN.php';
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
<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
<center><h4><ol class="breadcrumb"> <li class="active">  Product Edit / Update </li></ol></h4></center>
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
    	<td><label class="control-label">Product Name  </label></td>
        <td><input class="form-control" type="text" name="Product_Name"  value="<?php echo $product_name; ?>" ></td>
    </tr>
	
	
		
	<tr>
    	<td><label class="control-label">Price</label></td>
        <td>
       <input class="form-control" type="text" id="SaleRate"  name="SaleRate" placeholder="Price" value="<?php echo $rate; ?>"  oninput="myFunctionTP()" /></td>
    </tr>
	
	 <tr> <td></td>  <td></td></tr>
	 
    </table>
	<button type="submit" name="btn_save_updates" class="btn btn-default"> <span class="glyphicon glyphicon-save"></span> Update </button> 
    <a class="btn btn-default" href="productN.php"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
    
</form>

</div>

<?php include('../includes/footer.php');?>

