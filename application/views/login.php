<section id="mainBody">
		<div class="container">
		<h3 class="title"><span>Login</span></h3>
		    <ul class="breadcrumb">
				<li><a href="#">Home</a> <span class="divider">/</span></li>
				<li class="active">Login</li>
		    </ul>
			<div class="well">
			<div class="alert fade in">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
			 </div>
			 <div class="alert alert-block alert-error fade in">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
			 </div>
			<!-- <form class="form-horizontal"> -->
			<?= form_open('home/login', array("class" => "form-horizontal")) ?>
				<h3>Login Here</h3>
				<div class="form-group">
				<label class="control-label">Login As</label>
					
						<select name="pengguna" class="form-control">
							<option value="konsumen"> -- Konsumen -- </option>
							<option value="admin"> -- Admin -- </option>
							<option value="kepala"> -- Kepala Yayasan -- </option>
					</div>  
				</div>
				<div class="form-group">
					<label class="control-label" for="email">Email <sup>*</sup></label>
					
					  <input type="text" id="email" name="email" placeholder="email" class="form-control">
					
				  </div>	  
				<div class="form-group">
					<label class="control-label">Password <sup>*</sup></label>
					
					  <input type="password" id="password" name="password" class="form-control"/>
					
				</div>	
			
			<div class="form-group">
					<div class="form-control">
						<input class="btn btn-large btn-primary" name="login" type="submit" value="Login" class="form-control">
					</div>
				</div>		
			<p class="badge badge-important">[ * ] Required field	</p>
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