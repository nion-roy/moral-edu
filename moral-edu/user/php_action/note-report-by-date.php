<?php 
session_start();  
require_once '../../includes/conn.php';
?>
<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" href="css/table_data_center_with_border_black.css">
</head>
<body>
 <div class="container-fluid">
 <br>

<center><div> 
<?php
				   $pq=mysqli_query($con,"select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='".$_SESSION['id']."'");
				   while($pqrow=mysqli_fetch_array($pq)){
				?>
			    <span style="font-size:21;font-weight:bold;">
			  <?php echo $pqrow['business_name']; ?><br>
				 </span> 
				   <?php }?>
  <span style="font-size:20;">        
Date Wise Daily Notes <br>
</span> 
<span style="font-size:19;">
<?php 
$startDate = $_POST['startDate'];  $endDate = $_POST['endDate'];
echo '  Date From  : ' ; echo date("M d, Y", strtotime( $startDate));
echo ' |  Date To :  ' ; echo date("M d, Y", strtotime( $endDate));
?> <br>
Date : <?php echo date("M d, Y") ;?> | 
Time   : <?php date_default_timezone_set("Asia/Dhaka"); echo  date("h:i:sa");?>
</span> 
<div>
		 </center> 
  <br> 
<?php 
 
if($_POST) {

	$startDate = $_POST['startDate'];
	$date = DateTime::createFromFormat('m/d/Y',$startDate);
	$start_date = $date->format("Y-m-d");


	$endDate = $_POST['endDate'];
	$format = DateTime::createFromFormat('m/d/Y',$endDate);
	$end_date = $format->format("Y-m-d");

	$sql = "SELECT * FROM daily_notes where alarm_date >= '$start_date' AND alarm_date <= '$end_date' and user_id='".$_SESSION['id']."' ";
	$query = $con->query($sql);
    $sl=0;
	$table = '
	<table border="1" cellspacing="0" cellpadding="0" class="table table-bordered" style="width:100%;">
		<tr>
							<th>SL</th>
							<th>Entry Date</th>
							<th>Title </th>
							<th>Details</th>
							<th>Remind Date</th>
							
		</tr>

		<tr>';
		//$exp_cost = "";		
		while ($result = $query->fetch_assoc()) {
			$table .= '<tr>
				<td><center>'.++$sl.'</center></td> 
				<td><center>'.date("M d, Y", strtotime($result['entry_date'])).'</center></td>
				<td><center>'.$result['note_title'].'</center></td>
				<td><center>'.$result['note_details'].'</center></td> 
				<td><center>'.date("M d, Y", strtotime($result['alarm_date'])).'</center></td>
			</tr>';	
			
			//$exp_cost+= $result['expense_cost'];
		}
		$table .= '
		</tr>
		     
		
	</table>
	';	

	echo $table;

}
?>

</div>
 
</body>
</html>
