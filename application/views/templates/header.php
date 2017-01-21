<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?> | Ahmad 'AYA' Sanusi</title>
  <meta property="og:title" content="Ahmad 'AYA' Sanusi">
  <meta property="og:description" content="Selamat datang di web-nya Ahmad 'AYA' Sanusi. Sebuah web log yang berisi apa saja hal yang penulis sukai, mulai dari linux, web development, Anime, dan Manga">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.js" type="text/javascript"></script>
  <script  src="<?php echo base_url(); ?>assets/js/script.js" type="text/javascript"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.ico">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="title">
        <div><a href="https://sanusi.me" title="Landing Page"><h1>Ahmad 'AYA' Sanusi</h1></a></div>
        <div class="thin"><small>The Child of Lily, Yuriko Aya</small></div>
      </div>
      <!--- Navbar -->
      <div class="navbar">
        <ul class="topnav" id="myTopnav">
          <li><a href="<?php echo site_url(); ?>">HOME</a></li>
          <li><a href="<?php echo site_url(); ?>page/index">INDEX</a></li>
          <li><a href="<?php echo site_url(); ?>page/contact">CONTACT</a></li>
          <li class="icon">
            <a href="javascript:void(0);" onclick="MenuExpand()">&#9776; MENU</a>
          </li>
        </ul>
        <form class="form-inline" method="post" action="<?php echo base_url(); ?>search">
          <div class="form-group">
            <input type="text" class="form-control" id="search" name="search">
          </div>
          <button type="submit" class="btn btn-default">SEARCH</button>
        </form>
      </div>
