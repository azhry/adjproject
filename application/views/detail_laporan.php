
<h3 class="title"><span>Detail Laporan</span></h3>
<br><br><br>
<div class="container">
	<div class="row">	

		<div class="col-md-2 pull-right">
			<?php if($this->session->userdata('pengguna')=="kepala"):?>
				<a href="<?= base_url('kepala/laporan') ?>" name="cetak" class="btn btn-primary" >Cetak Laporan</a>

			<?php endif; ?>
		</div>
	</div>
	<br>
	<div class="col-md-12">
		<table class="table table-bordered table-hover" style="width:100%;" id="table_id">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Konsumen</th>
					<th>Alamat</th>
					<th>No. Telp</th>
					<th>Nama Art</th>
					<th>Durasi Kontrak</th>
					<th>Nama Yang Di Asuh</th>
					<th>Gaji</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; foreach ($laporan as $row): ?>
					<?php  

						$order = $this->order_art_model->get_con($row->id_laporan); ?>
					<?php if (isset($order)) : ?>
					<?php
						$data = [];
						foreach ($order as $odr)
						{
							$data['id_konsumen'] 	= $odr->id_konsumen;
							$data['id_art']			= $odr->id_art;
							$mulai_kerja 			= new DateTime($odr->mulai_kerja);
							$akhir_kerja			= new DateTime($odr->akhir_kerja);
							$data['durasi'] 		= $mulai_kerja->diff($akhir_kerja);
							$data['durasi']			= $data['durasi']->format('%a hari');

						}

						if (isset($data['id_art']))
						{
							$art = $this->art_model->get(['id_art' => $data['id_art']]);
							foreach ($art as $a)
							{
								$data['nama_art'] 	= $a->nama;
								$data['gaji']		= $a->gaji;
							}

							$konsumen = $this->konsumen_model->get(['id_konsumen' => $data['id_konsumen']]);
							foreach ($konsumen as $ksn)
							{
								$data['nama_konsumen'] 	= $ksn->nama;
								$data['alamat']			= $ksn->alamat;
								$data['no_telp']		= $ksn->no_telp;
								$data['anak']			= json_decode($ksn->anak);
							}
						}
					?>
					<tr>
						<td><?= ++$i ?></td>
						<td><?= (isset($data['nama_konsumen'])) ? $data['nama_konsumen'] : '-' ?></td>
						<td><?= (isset($data['alamat'])) ? $data['alamat'] : '' ?></td>
						<td><?= (isset($data['no_telp'])) ? $data['no_telp'] : '' ?></td>
						<td><?= (isset($data['nama_art'])) ? $data['nama_art'] : '' ?></td>
						<td><?= (isset($data['durasi'])) ? $data['durasi'] : '' ?></td>
						<td>
							<ul>
								<?php if (isset($data['anak'])): ?>
									<?php foreach ($data['anak'] as $anak): ?>
										<li><?= $anak->nama ?> <?= $anak->usia ?>thn</li>
									<?php endforeach; ?>
								<?php else: ?>
									<li>-</li>
								<?php endif; ?>
							</ul>
						</td>
						<td><?= (isset($data['gaji'])) ? $data['gaji'] : '' ?></td>
						<?php if($this->session->userdata('pengguna')=="admin") : ?>
							<td>
								<a href="<?= base_url('admin/hapus_laporan/'.$row->id_laporan) ?>" class="btn btn-danger">Hapus</a>
							</td>
						<?php else : ?>
							<td>
								<a href="<?= base_url('kepala/hapus_laporan/'.$row->id_laporan) ?>" class="btn btn-danger">Hapus</a>
							</td>
						<?php endif; ?>
					</tr>
				<?php endif; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>