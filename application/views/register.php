<div class="container">
<h3 class="title"><span>Registration</span></h3>
    <ul class="breadcrumb">
		<li><a href="#">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<div class="well col-md-9">
	<?php 
		$msg = $this->session->flashdata('msg');
		if (isset($msg))
			echo $msg;
	?>
	 <?= form_open_multipart('home/register', array("class" => "form-horizontal")) ?>
	 	<div class="form-group">
			<div class="col-md-3">
				<label for="inputFname1" class="pull-left">Username</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="username" id="username" placeholder="Username" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3" >
				<label  for="inputLnam" class="pull-left">Nama</label>
			</div>
			<div class="col-md-6">
			  	<input type="text" name="nama" id="nama" placeholder="Name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
		<label  for="input_email" class="pull-left">Email </label>
			</div>
			<div class="col-md-6">
		  <input type="text" name="email" id="input_email" placeholder="Email" class="form-control">
			</div>
		</div>	
		<div class="form-group">
			<div class="col-md-3">
		<label  for="input_email" class="pull-left">Jenis Kelamin </label>
			</div>
			<div class="col-md-6">
		  		<select name="jenis_kelamin" class="form-control">
					<option value="laki-laki">Laki Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
		</div>	  
		<div class="form-group">
			<div class="col-md-3">
				<label  for="input_email" class="pull-left">Agama </label>
			</div>
			<div class="col-md-6">
				<select name="agama" class="form-control">
					<option value="islam">Islam</option>
					<option value="kristen">Kriten</option>
					<option value="hindu">Hindu</option>
					<option value="budha">Budha</option>
					<option value="dll">Lain Lain</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label  for="inputPassword1" class="pull-left">Password </label>
			</div>
			<div class="col-md-6">
		  <input type="password" name="password" id="inputPassword1" placeholder="Password" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
			<label  for="address" class="pull-left">Address</label>
			</div>
			<div class="col-md-6">
			  <input type="text" name="address" id="address" placeholder="Adress" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
			<label  for="mobile" class="pull-left">Mobile Phone </label>
			</div>
			<div class="col-md-6">
			  <input type="text" name="mobile" id="mobile" placeholder="Mobile Phone" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label  for="foto" class="pull-left">Foto Profil </label>
			</div>
			<div class="col-md-6">
			  	<input type="file" name="foto" id="foto" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label  for="anak" class="pull-left">Tambah Jumlah Anak</label>
			</div>
			<div class="col-md-6">
			  	<button class="btn btn-danger" id="add-anak">+ Anak</button>
			</div>
		</div>
		<div class="col-md-12"  id="dynamic-form">
			

		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#add-anak').on('click', function() {
					$('#dynamic-form').append('<div class="form-group">' +
							'<div class="col-md-3">' +
								'<label  for="anak" class="pull-left">Nama Anak</label>' +
							'</div>' +
							'<div class="col-md-6">' +
								'<input class="form-control" type="text" name="nama_anak[]" placeholder="Nama Anak">' +
							'</div>' +
						'</div>' +
						'<div class="form-group">' +
							'<div class="col-md-3">' +
								'<label  for="usia" class="pull-left">Usia Anak</label>' +
							'</div>' +
							'<div class="col-md-6">' +
								'<input class="form-control" type="number" name="usia_anak[]" placeholder="Usia">' +
							'</div>' +
						'</div>');

					return false;
				});
			});
		</script>
		
	<div class="form-group">
			<div class="col-md-3 ">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="form-control btn btn-large btn-primary" name="register" type="submit" value="Register">
			</div>
		</div>	
	<?= form_close() ?>	
</div>

</div>

</section>

 <span id="toTop" style="display: none;"><span><i class="icon-angle-up"></i></span></span>
  </body>
</html>