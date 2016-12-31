<section id="mainBody">
		<div class="container">
		<h3 class="title"><span>Login</span></h3>
		    <ul class="breadcrumb">
				<li><a href="#">Home</a> <span class="divider">/</span></li>
				<li class="active">Login</li>
		    </ul>
			<div class="well col-md-6">
			<?php  
				$msg = $this->session->flashdata('msg');
				if (isset($msg))
					echo $msg;
			?>
			<!-- <form class="form-horizontal"> -->
			<?= form_open('home/login', array("class" => "form-horizontal")) ?>
				<h3>Login Admin / Kepala Yayasan</h3>
					<div class="form-group">
						<div class="col-md-3">
							<label class="pull-left">Login As</label>
						</div>
						<div class="col-md-6">
							 <select name="pengguna" class="form-control">
							<option value="admin"> -- Admin -- </option>
							<option value="kepala"> -- Kepala Yayasan -- </option>
						</select>
						</div>
				  </div> 
				<div class="form-group">
					<div class="col-md-3">
						<label for="email" class="pull-left">Email :</label>
					</div>
					<div class="col-md-6">
						 <input type="text" id="email" name="email" placeholder="email" class="form-control">
					</div>
				  </div>	  
				<div class="form-group">
					<div class="col-md-3">
						<label class="pull-left">Password :</label>
					</div>
					<div class="col-md-6">
						<input type="password" id="password" name="password" class="form-control"/>
					</div>
				</div>	
			
			<div class="form-group">
						<input class="btn btn-large btn-primary class="form-control"" name="login" type="submit" value="Login">
					
				</div>		
			<br>
			<br>
			<br>
			<?= form_close() ?>
		</div>

</div>

</section>

<!-- Footer
================================================== -->
<footer class="footer">
<div class="container">
<p class="pull-right"><a href="#">Terms and condition</a> &copy; Copyright 2013 Sell Anything. </p>
</div>
</div>
 </footer>
 <span id="toTop" style="display: none;"><span><i class="icon-angle-up"></i></span></span>
    <!--  javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('themes/js/jquery-1.8.3.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('themes/js/smart.js') ?>"></script>
  </body>
</html>