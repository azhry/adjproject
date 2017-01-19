
<!-- ======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Profil</span></h3>
    <ul class="breadcrumb">
		<li><a href="#">Home</a> <span class="divider">/</span></li>
		<li class="active">Profil</li>
    </ul>
	<div class="col-md-12 tumbnail">
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		Selamat Datang di Halaman Profil Anda
	</div>

	 	<h3 align="center">Your personal information</h3>
	 	<div class="row">
	 		<div class="col-md-3">
	 			<img src="<?=base_url('foto/'.$username.'.png') ?>" class="img img-responsive">
	 		</div>
	 		<div class="col-md-9">
	 			<table class="table table-bordered table-hover" style="width:100%;text-align:left;">
	 		<tr>
	 			<td>Nama</td>
	 			<td><?= $nama ?></td>
	 		</tr>
	 		<tr>
	 			<td>Alamat</td>
	 			<td><?= $alamat ?></td>
	 		</tr>
	 		<tr>
	 			<td>Agama</td>
	 			<td><?= $agama ?></td>
	 		</tr>
	 		<tr>
	 			<td>Jenis Kelamin</td>
	 			<td><?= $jenis_kelamin ?></td>
	 		</tr>
	 		<tr>
	 			<td>Email</td>
	 			<td><?= $email ?></td>
	 		</tr>
	 		<tr>
	 			<td>Nomor Handphone</td>
	 			<td><?= $no_telp ?></td>
	 		</tr>
	 	</table>
	 		</div>
	 	</div>
	 	<div class="control-group">
			<div class="controls">
				<a href="<?= base_url('profil/edit') ?>" class="btn btn-large btn-primary" > Edit Profil </a>
			</div>
		</div>

</div>

</section>
  </body>
</html>