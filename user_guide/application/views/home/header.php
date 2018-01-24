<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>







	<link href='<?php echo base_url(); ?>data_table/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>data_table/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
	<script src="<?php echo base_url(); ?>data_table/jquery-1.12.4.js" ></script>
	<script src="<?php echo base_url(); ?>data_table/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>data_table/dataTables.buttons.min.js" ></script>
	<script src="<?php echo base_url(); ?>data_table/buttons.flash.min.js" ></script>
	<script src="<?php echo base_url(); ?>data_table/jszip.min.js" ></script>
	<script src="<?php echo base_url(); ?>data_table/pdfmake.min.js" ></script>
	<script src="<?php echo base_url(); ?>data_table/vfs_fonts.js" ></script>
	<script src="<?php echo base_url(); ?>data_table/buttons.html5.min.js" ></script>
	<script src="<?php echo base_url(); ?>data_table/buttons.print.min.js" ></script>


	<script src="<?php echo base_url(); ?>include/js/modernizr.js"></script>

	<script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 header-logo">
					<!--<p><h1></h1>-->
					<br>
					<a href="<?php echo base_url(); ?>index.php/Home/main_page" ><img src="<?php echo base_url(); ?>include/img/eepilogo.png" alt="" class="img-responsive logo"  width="70%" style="margin-top:-5px;
				    border: 2px solid #42b3e5;
				    padding: 2px;
				    border-radius: 25px;">
				    </a>
				</div>

				<div class="col-md-9">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">

					        <li><a class="menu active" href="<?php echo base_url();?>index.php/Home/main_page#home" >Home</a></li>

					        <li><a class="menu" href="<?php echo base_url();?>index.php/Home/main_page#about">about us</a></li>

          				 	<li><a class="menu"  href="<?php echo base_url();?>index.php/Home/main_page#service">services</a></li>
					                      		   
							<?php if( $this->session->userdata('flag')== 1)
			 				echo"<li><a class='menu' 
			 				href='".base_url()."/index.php/Home/main_page#team'>our team</a></li>";
							?>

							<?php if( $this->session->userdata('flag')== 1)
			 				echo"<li><a class='menu' href='".base_url()."index.php/Report/show_report'>Reports</a></li>";
			 				//echo"<li><a class='menu' href='#report_details'>Reports</a></li>";
							?>

				        	<li><a class="menu" href="<?php echo base_url();?>index.php/Home/main_page#complain"> Complain </a></li>

							<?php if( $this->session->userdata('status')== 1) 
							echo "<li><a class='menu' href='".base_url()."index.php/User/viewAllusers' >Admin Panal</a></li>";
	      					?>

							<?php if( $this->session->userdata('flag')== 1)			   
		  					echo "<li><a class='menu' href='".base_url()."index.php/Logout/logout'>log out</a></li>";
		   					else
							echo  "<li><a class='menu pointer' data-toggle='modal' data-target='#myModal' >log in </a></li>";
	     					?> 

					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> 