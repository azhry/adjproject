<h3 class="title"><span>Daftar Konsumen</span></h3>

<div class="container">
	<!-- <div class="row">
		<?= form_open('admin/list_konsumen') ?>
			<div class="col-md-3 form-group">
				<input type="text" name="cari" class="form-control">
			</div>
			<div class="col-md-1 form-group">
				<input type="submit" name="btn_cari" value="Cari" class="btn btn-primary form-control">
			</div>
			<?= form_close() ?>
	</div>	 -->	
	<table class="table table-bordered table-hover" style="width:100%;" id="table_id">
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Konsumen</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No Telp</th>
			<th>Anak ( usia )</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php $i = 0; foreach ($konsumen as $row): ?>
		<tr>
			<td><?= ++$i ?></td>
			<td><?= $row->nama ?></td>
			<td>
				<?= $row->alamat ?>
			</td>
			<td>
				<?= $row->email ?>
			</td>
			<td>
				<?= $row->no_telp ?>
			</td>
			<td>
				<?php 
					$anak = json_decode($row->anak);
					for ($j=0; $j <count($anak); $j++) { 
						echo $anak[$j]->nama ." : " . $anak[$j]->usia. " tahun";
						echo "<br>";
					}
				?>
			</td>
			<td>
				<a href="<?= base_url('admin/detail_konsumen/'.$row->id_konsumen) ?>" class="btn btn-success">View</a>
				<a href="<?= base_url('admin/hapus_kon/'.$row->id_konsumen) ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>

