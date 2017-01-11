<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Baby Sitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- styles -->
	<!-- <link rel="stylesheet/less" type="text/css" href="themes/less/bootstrap.less"> -->
	<!-- <link rel="stylesheet/less" type="text/css" href="<?= base_url('themes/less/bootstrap.less') ?>"> -->
	<!-- <script src="themes/js/less/less.js" type="text/javascript"></script> -->
	<script type="text/javascript" src="<?= base_url('aa/js/jquery-2.1.4.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url('aa/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('aa/css/styles.css')?>"/>
	<script type="text/javascript" rel="stylesheet" src="<?= base_url('aa/js/bootstrap.min.js')?>"></script>

	<!-- favicon-icons -->
    <link rel="shortcut icon" href="<?= base_url('aa/font-awesome/css/font-awesome.min.css') ?>">
  </head>
<body>
</script>
<header class="header">
<div class="container">
	<nav class="navbar navbar-success">
		<div class="container-fluid">
			<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a href="<?= base_url('home') ?>" class="navbar-brand"><img class="img img-responsive" src="<?= base_url('img/logo_1.png') ?>" alt="" width="40px" height="40px"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li ><a href="<?= base_url('home') ?>">Home</a></li>
                  <li ><a href="<?= base_url('home/tips') ?>">Tips & Artikel </a></li>
                  <li ><a href="<?= base_url('home/about_us') ?>">About Us</a></li>
                  <li ><a href="<?= base_url('home/contact_us') ?>">Contact</a></li>
                  <?php 
						$username = $this->session->userdata('username');
						if (isset($username)): 
					?>
                  <li ><a href="<?= base_url('profil/chat') ?>">Chat Dengan Admin</a></li>
              <?php endif; ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php 
					$username = $this->session->userdata('username');
					if (isset($username)): 
				?>
				<li>
					<?php if ($this->session->userdata('pengguna')=='admin'): ?>
						<a href="<?= base_url('admin') ?>"><?= $username ?></a>
					<?php else: ?>
					<a href="<?= base_url('profil') ?>"><?= $username ?></a>
					<?php endif ?>
				</li>
				<li><a href="<?= base_url('logout') ?>">Logout</a></li>
				<?php else: ?>
				<li><a href="<?= base_url('home/login') ?>">Login</a></li>
				<li><a href="<?= base_url('home/register') ?>">Register</a></li>
				<?php endif; ?>
			</ul>
			</div>
		</div>
	</nav>
</div>
<style type="text/css" media="screen">
	h3{
		text-align: center;
	}
</style>
</header>
