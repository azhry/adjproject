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
	<link rel="stylesheet" type="text/css" href="<?= base_url('aa/css/bootstrap.min.css') ?>">
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
				<li class=""><a href="<?= base_url('admin') ?>" class="brand">Portal Admin</a></li>
				<li><a href="<?= base_url('home') ?>">Home</a></li>
				<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Daftar Baby Syster <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?= base_url('admin/art') ?>">Daftar Baby Sitter</a></li>
				    <li><a href="<?= base_url('admin/daftar_art') ?>">Daftar Baby Sitter Bekerja</a></li>
		          </ul>
		        </li>
				
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tambah
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= base_url('admin/konsumen') ?>">Tambah Konsumen</a></li>
						<li><a href="<?= base_url('admin/tambah') ?>">Tambah Baby Sitter</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Artikel
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= base_url('admin/info') ?>">Post Artikel</a></li>
				            <li><a href="<?= base_url('admin/artikel') ?>">List Artikel</a></li>
					</ul>
				</li>
				<li><a href="<?= base_url('admin/list_konsumen') ?>">Daftar Konsumen</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
			<li><a href="<?= base_url('admin/detail_laporan') ?>">Detail Laporan</a></li>
			<li><a href="<?= base_url('admin/list_chat') ?>">Daftar Pesan</a></li>
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
