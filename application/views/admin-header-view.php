<!--Header Section-->
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pharma</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>include/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>include/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>include/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>include/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>include/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>include/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>include/admin_design/font.css">
</head>

<!--End Header Section-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="http://localhost/Pharma2/include/img/eepilogo.png" class="logo">
      <span class="logo-lg"><b>Pharmacovigilance</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php echo $reports_count;?> </span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $reports_count;?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php foreach($reports as $report):?>
                  
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> <?php echo $report['report_id'].'-'.$report['report_desc'];?>
                    </a>
                  </li>
                  <?php endforeach;?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url();?>index.php/Admin">View all</a></li>
            </ul>
          </li>
        <!-- End Notifications: style can be found in dropdown.less -->
          <!--End Navbar-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!--src="<?php echo base_url();?>dist/img/user2-160x160.jpg"-->
            
              <img src="<?php echo base_url(); ?>include/img/user2-160x160.jpg" class="user-image" alt="User Image">
            
              <span class="hidden-xs"> <?php echo $this->session->userdata('user_name');?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              
                <img src="<?php echo base_url(); ?>include/img/user2-160x160.jpg" class="img-circle" alt="User Image">
             
                <!--?php header('Content-type: image/jpeg'); echo '<img src="'.$userImage['EMPIMAGE'] .'" />';?-->
                <p>
                  <?php echo $this->session->userdata('user_name'); ?>
                <!-- 
                  <small><?php echo iconv('windows-1256','utf-8',$emp_personalInfo['DEPT']); ?>  </small>
                  <small><?php echo iconv('windows-1256','utf-8',$emp_personalInfo['POSITION']); ?></small>
                   -->
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>index.php/user/resetpassword" class="btn btn-primary">Reset Password</a>
                </div>
                <div class="pull-right">
                  <a  href="<?php echo base_url(); ?>index.php/Logout/logout" class="btn btn-primary">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        
          <img src="<?php echo base_url(); ?>include/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        
        </div>
        <div class="pull-left info">
          <p><?php  echo $this->session->userdata('user_name');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu" data-widget="tree">
      <?php if( $this->session->userdata('status') == 1){ ?>
        <li><a href="<?php echo base_url(); ?>index.php/User/viewAllusers"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Admin"><i class="fa fa-user"></i> <span>Reports</span></a></li>
      <?php }?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Pharmacovigilance
        <small>System</small>
      </h1>
     