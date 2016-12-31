
<!-- ======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Registration</span></h3>
    <ul class="breadcrumb">
		<li><a href="#">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<div class="col-md-9 well">
	
	<?php  
		$msg = $this->session->flashdata('msg');
		if (isset($msg))
		{
			echo $msg;
		}
	?>

	 <?= form_open('profil/edit', array("class" => "form-horizontal"))  ?>

	 	<h3>Your personal information</h3>
	 	<div class="form-group">
			<div class="col-md-3">
	 			<label class="control-label" for="nama">Nama </label>
			</div>
			<div class="col-md-6">
				<input type="text" id="nama" name="nama" placeholder="nama" value="<?= $nama ?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="alamat">Alamat </label>
			</div>
			<div class="col-md-6">
				<input type="text" id="alamat" name="alamat" placeholder="alamat" value="<?= $alamat ?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
	 		<label  for="agama">Agama </label>
			</div>
			<div class="col-md-6">
				<input type="text" id="agama" name="agama" placeholder="agama" value="<?= $agama ?>"  class="form-control">
			</div>
		</div>
	 	<div class="form-group">
			<div class="col-md-3">
	 			<label  for="jenis_kelamin">Jenis Kelamin </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="jenis_kelamin">
	 				<?php if ($jenis_kelamin == 'Perempuan'): ?>
	 					<option value="Perempuan">Perempuan</option>
	 					<option value="Laki-laki">Laki-laki</option>
	 				<?php else: ?>
	 					<option value="Laki-laki">Laki-laki</option>
	 					<option value="Perempuan">Perempuan</option>
	 				<?php endif; ?>
	 			</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
	 		<label  for="email">Email </label>
			</div>
			<div class="col-md-6">
				<input type="email" id="email" name="email" placeholder="email" value="<?= $email ?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
	 		<label  for="no_telp">Nomor Handphone </label>
			</div>
			<div class="col-md-6">
				<input type="text" id="no_telp" name="no_telp" placeholder="nomor handphone" value="<?= $no_telp ?>"  class="form-control">
			</div>
		</div>
		<div class="form-group" align="center">
	 		<input class="btn btn-success btn-large" type="submit" name="submit" value="Edit Profil" />
	 	</div>
	 <?= form_close() ?>

</div>

</div>

</section>

  </body>
</html>