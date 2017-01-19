<h3 class="title"><span>Daftar Artikel</span></h3>

<div class="container">
	<div class="row">
		<?= form_open('admin/artikel') ?>
			<div class="col-md-3 form-group">
				<input type="text" name="cari" class="form-control">
			</div>
			<div class="col-md-1 form-group">
				<input type="submit" name="btn_cari" value="Cari" class="btn btn-primary form-control">
			</div>
			<?= form_close() ?>
	</div>
	<?php  
		$msg = $this->session->flashdata('msg');
		if (isset($msg)) echo $msg;
	?>
	<table class="table table-bordered table-hover" style="width:100%;">
		<tr>
			<th>No</th>
			<th>Foto Artikel</th>
			<th>Judul Artikel</th>
			<th>Deskripsi</th>
			<th>Tanggal Post</th>
			<th>Action</th>
		</tr>
		<?php $i = 0; foreach ($artikel as $row): ?>
			<tr>
				<td><?= ++$i ?></td>
				<td><img width="100" height="100" src="<?= base_url('foto/'.$row->gambar.'.png') ?>" alt="#"></td>
				<td><?= $row->judul ?></td>
				<td>
					<?php 
						if (strlen($row->isi) < 100) echo $row->isi;
						else echo substr($row->isi, 0, 100) . '...' ;
					?>
				</td>
				<td><?= $row->waktu ?></td>
				<td><a href="<?= base_url('admin/edit_artikel/'.$row->id_info) ?>" class="btn btn-primary">Edit</a> | <a href="<?= base_url('admin/hapus_artikel/'.$row->id_info) ?>" class="btn btn-danger">Hapus</a> | <a href="<?= base_url('admin/view_artikel/'.$row->id_info) ?>" class="btn btn-success">View</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<div class="footer">
		<div class="navbar">
<div class="navbar">
	<div class="nav-collapse">
    <ul class="nav pull-right">
		  <!-- <ul class="nav nav-pills" class="btn-large" align="center" style="padding:2px;" style="margin-top:0">
                  <li role="menu"><a href="#">1</a></li>
                  <li role="menu"><a href="#">200</a></li>
                  <li role="menu"><a href="#">3</a></li>
            </ul>
		</ul> -->
	</div>
  </div>
</div>

	</div>
	<?php echo $pagination; ?>
</div>