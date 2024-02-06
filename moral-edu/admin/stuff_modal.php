<!-- Add Stuff -->
    <div class="modal fade" id="adddealer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><center>Add New Client</center></h4>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="client_add.php" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
						
						<div style="width:100%" >
	 <?php
				
				   include('../includes/conn.php');
				   $pq=mysqli_query($con,"select max(userid) as userid from stuff ");
				   while($pqrow=mysqli_fetch_array($pq)){
				?>
        
        <input class="form-control" type="hidden" name="UserId"  value="<?php echo $pqrow['userid']+1; ?>" >
		
		<?php }?>
	
	</div>
	
		  <div class="col-md-6">			
						<div style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Name</span>
                            <input type="text" style="width:100%; text-transform:capitalize;" class="form-control" name="StuffName" required>
					     </div>
						 
						<div style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Position</span>
                            <input type="text" style="width:100%; text-transform:capitalize;" class="form-control" name="Position" required>
                        </div>
						
						<div  style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Phone</span>
                            <input type="text" style="width:100%;" class="form-control" name="contact" required>
                        </div>
						
						<div style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Business Name</span>
                            <input type="text" style="width:100%;" class="form-control" name="BizName" required>
					     </div>
						 
						 <div  style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Business Phone</span>
                            <input type="text" style="width:100%;" class="form-control" name="BizPhone" required>
                        </div>
						
						<div  style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Business Email</span>
                            <input type="text" style="width:100%;" class="form-control" name="BizEmail" required>
                        </div>
						
						<div  style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Business Address</span>
                            <input type="text" style="width:100%;" class="form-control" name="BizAddress" required>
                        </div>
						
						<div  style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Service Charge</span>
                            <input type="text" style="width:100%;" class="form-control" name="ServCharg" required>
                        </div>
						
						<div  style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Invoice Welcome</span>
                            <input type="text" style="width:100%;" class="form-control" name="InvWelcome" value="Thanks For Work With Us" required>
                        </div>
						
						
			</div>
			
<div class="col-md-6">	
                       <div style="width:100%" class="form-group input-group">	
							<span style="width:120px;" class="input-group-addon">Join Date:</span>
                            <input type="date" style="width:100%;" class="form-control" name="joindate" required>
                        </div>
						
						<div style="width:100%" class="form-group input-group">	
							<span style="width:120px;" class="input-group-addon">ExpireDate :</span>
                            <input type="date" style="width:100%;" class="form-control" name="ExpireDate" required>
                        </div>
						
						<div style="width:100%;" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Division :</span>
                            <select class="form-control" name="Division">
							<option value="#">Select Division</option> 
				      	<?php 
				      	$sql = "SELECT id,area_name FROM division";
								$result = $con->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} 
				      	?> 
							</select>
                        </div>
						
						<div style="width:100%;" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">District :</span>
                            <select class="form-control" name="District">
							<option value="#">Select District</option>
		
				      	<?php 
				      	$sql = "SELECT id,dist_name FROM district";
								$result = $con->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} 
				      	?> 
							</select>
                        </div>
						
						<div style="width:100%;" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Upazila/Area :</span>
                            <select class="form-control" name="Upazila">
							<option value="#">Select Upazila / Area</option>
		
				      	<?php 
				      	$sql = "SELECT id,thana_name FROM thana";
								$result = $con->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} 
				      	?>
	   
							</select>
                        </div>
						 
						
				<div  style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Comments:</span>
                            <input type="text" style="width:100%;" class="form-control" name="Comments">
                        </div>		
											
						<div style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">User Name</span>
                            <input type="text" style="width:100%;" class="form-control" name="username" required>
						</div>
						
						<div style="width:100%" class="form-group input-group">
							<span style="width:120px;" class="input-group-addon">Password</span>
                            <input type="password" style="width:100%;" class="form-control" name="password" required>
                        </div>
						
						<div style="width:100%;" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Software Type :</span>
                            <select class="form-control" name="Type">
								
							<option value="1">Paid</option> 
		                    <option value="2">Trial</option>
							</select>
                        </div>
						
						<div style="width:100%" class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Logo</span>
                            <input type="file" style="width:100%;" class="form-control" name="image">
                        </div>
						
		</div>				
						</div>
				</div>     
				 </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                   <a href="stuff.php"></a> <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
					</form>
                </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

