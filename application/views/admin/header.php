<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?> | Ahmad 'AYA' Sanusi</title>
  <meta property="og:title" content="Ahmad 'AYA' Sanusi">
  <meta property="og:description" content="Selamat datang di web-nya Ahmad 'AYA' Sanusi. Sebuah web log yang berisi apa saja hal yang penulis sukai, mulai dari linux, web development, Anime, dan Manga">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.ico">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url(); ?>admin" class="logo">
      <span class="logo-mini">DASH</span>
      <!-- LOGO -->
      <span class="logo-lg">Dashboard</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url(); ?>login/logout" class="dropdown-toggle" data-toggle="dropdown">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="main-sidebar">
    <!-- Inner sidebar -->
    <div class="sidebar">
      <!-- user panel (Optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/img/default.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ahmad 'AYA' Sanusi</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Administrator</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">NAVIGATION MENU</li>
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i><span>Home Page</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-file-o"></i><span>Post</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/newpost"><i class="fa fa-edit"></i>New Post</a></li>
            <li><a href="<?php echo base_url(); ?>admin/listpost"><i class="fa fa-files-o"></i>Edit Post</a></li>
          </ul>
        </li>
<!---        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i><span>Page</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/newpage"><i class="fa fa-edit"></i>New Page</a></li>
            <li><a href="<?php echo base_url(); ?>admin/listpage"><i class="fa fa-files-o"></i>Edit Page</a></li>
          </ul>
        </li>
--->        <li class="treeview">
          <a href="#"><i class="fa fa-list-ul"></i><span>Meta</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/category"><i class="fa fa-circle-o"></i>Catagories</a></li>
            <li><a href="<?php echo base_url(); ?>admin/tag"><i class="fa fa-circle-o"></i>Tags</a></li>
          </ul>
        </li>
      </ul><!-- /.sidebar-menu -->

    </div><!-- /.sidebar -->
  </div><!-- /.main-sidebar -->
<div class="content-wrapper">
  <div class="content">
