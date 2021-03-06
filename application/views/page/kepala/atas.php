<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Baby Sister</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- styles -->
	<!-- <link rel="stylesheet/less" type="text/css" href="themes/less/bootstrap.less"> -->
	<!-- <link rel="stylesheet/less" type="text/css" href="<?= base_url('themes/less/bootstrap.less') ?>">
	<script src="<?= base_url('themes/js/less/jquery-1.8.3.min.js') ?>" type="text/javascript"></script>
	<script src="<?= base_url('themes/js/less/less.js') ?>" type="text/javascript"></script>
	<link rel="stylesheet" href="<?= base_url('bootstrap/js/bootstrap.min.js') ?>">
	<link rel="stylesheet" href="<?= base_url('bootstrap/js/bootstrap.min.css') ?>"> -->

	<script type="text/javascript" src="<?= base_url('aa/js/jquery-2.1.4.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('aa/js/morris/morris.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('aa/js/raphael.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('aa/js/raphael.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('aa/js/morris/morris.min.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url('aa/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('aa/js/morris/morris.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('aa/css/styles.css')?>"/>
	<script type="text/javascript" rel="stylesheet" src="<?= base_url('aa/js/bootstrap.min.js')?>"></script>
    <link href="<?= base_url('aa/datatables/media/css/jquery.dataTables.css') ?>" rel="stylesheet">
    <script src="<?=base_url('aa/datatables/media/js/jquery.dataTables.js') ?>"></script>
	<!-- favicon-icons -->
    <link rel="shortcut icon" href="<?= base_url('themes/images/favicon.ico') ?>">
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      margin: auto;
  }
  h3{
  	text-align: center;
  }
  table{
  	width: 100%;
  }
  
  </style>
  </head>
<body>
<header class="header">
<div class="container">
<nav class="navbar navbar-default">
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class=""><a href="<?= base_url('kepala') ?>" class="brand">Portal Kepala Yayasan</a></li>
				<li><a href="<?= base_url('home') ?>">Home</a></li>
				
			<ul class="nav navbar-nav navbar-right">
				
			<li><a href="<?= base_url('kepala/detail_laporan') ?>">Detail Laporan</a></li>
			<?php 
					$username = $this->session->userdata('username');
					if (isset($username)): 
				?>
				<li><a href="<?= base_url('logout') ?>">Logout</a></li>
				<?php endif; ?>
			</ul>
		</div>
</nav>



</div>
</header>
