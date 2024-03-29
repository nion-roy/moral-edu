 
  <?php 
  require_once 'session.php';
  error_reporting( ~E_NOTICE );
  require_once '../includes/conn.php';
  require_once '../includes/dbconfig.php';
  include('../scripts.php');
  include('modal.php');
  error_reporting( ~E_NOTICE );
  ?> 

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title><?php include('../includes/title_bar.php'); ?></title>
<style> nav a{font-size:18px;} a{font-size:16px; font-weight:bold;}</style>
</head>
<body>

<div class="container" style="width:100%;">
	<nav class="navbar navbar-default navbar-static-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	   <a class="navbar-brand" href="index.php">  <?php include('../includes/header_title.php'); ?> </a>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      

      <ul class="nav navbar-nav navbar-right">        

      	<li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-home"></i></a></li> 
		<!--
		
		<li id="topNavUser"><a href="title_name.php"> <i class="glyphicon glyphicon-user"></i> Name</a></li>

		-->
		
		<li class="dropdown" id="NavUser">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> Employee <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavUser"><a href="employee.php"> <i class="glyphicon glyphicon-user"></i> Employee  ( Active )</a></li>          
            <li id="topNavUser"><a href="employee_inactive.php"> <i class="glyphicon glyphicon-user"></i> Employee ( InActive )</a></li>          
            </ul>
		</li> 
		 
        <li class="dropdown" id="NavUser">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> Clients <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="topNavUser"><a href="stuff.php"> <i class="glyphicon glyphicon-user"></i> Paid ( Active ) </a></li>            
            <li id="topNavUser"><a href="stuff_inactive.php"> <i class="glyphicon glyphicon-user"></i> Paid ( InActive )</a></li>            
            <li id="topNavUser"><a href="customer_paid_from_trial.php"> <i class="glyphicon glyphicon-user"></i> Paid From Trial ( Active )</a></li>            
            <li id="topNavUser"><a href="customer_trial.php"> <i class="glyphicon glyphicon-user"></i> Trial ( Active )</a></li>            
            <li id="topNavUser"><a href="customer_trial_inactive.php"> <i class="glyphicon glyphicon-user"></i> Trial ( InActive )</a></li>            
            <li id="topNavUser"><a href="client.php"> <i class="glyphicon glyphicon-user"></i> All Customer</a></li>            
            <li id="topNavUser"><a href="customer_details.php"> <i class="glyphicon glyphicon-user"></i> Details </a></li>            
			  </ul>
		</li> 		
		
		 <li class="dropdown" id="navOrder1">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-map-marker"></i> Location <span class="caret"></span></a>
        <ul class="dropdown-menu">
        
		<li id="topNavUser"><a href="area.php"> <i class="glyphicon glyphicon-map-marker"></i> Division </a></li>
		<li id="topNavUser"><a href="district.php"> <i class="glyphicon glyphicon-map-marker"></i> District </a></li> 
		<li id="topNavUser"><a href="thana.php"> <i class="glyphicon glyphicon-map-marker"></i> Upazilla </a></li> 
		 
        </ul></li> 
		
		<li class="dropdown" id="NavUser">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-envelope"></i> Message <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavUser"><a href="customer_msg.php"> <i class="glyphicon glyphicon-envelope"></i> Send Message </a></li>          
            <li id="topNavUser"><a href="cust_msg.php"> <i class="glyphicon glyphicon-user"></i> Customer Message</a></li>          
            
			  </ul>
		</li> 
 
		
      <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  My Account</a></li>
						<li class="divider"></li>  
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
               
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>
<div class="container" style="width:100%;">