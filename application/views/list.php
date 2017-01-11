<h3 class="title"><span>Baby Sitter</span></h3>
	<!-- Dot Indicators -->
	<!-- Dot Indicators -->
    <div class="container">
    <?php  
    	$msg = $this->session->flashdata('msg');
    	if (isset($msg))
    	{
    		echo $msg;
    	}
    ?>
    <div class="col-md-12">
		<?= form_open('admin/art') ?>
			<!-- <div class="col-md-3 form-group">
				<input type="text" name="cari" class="form-control">
			</div>
			<div class="col-md-1 form-group">
				<input type="submit" name="btn_cari" value="Cari" class="btn btn-primary form-control">
			</div> -->
			<?= form_close() ?>
			<?php if ($this->session->userdata('pengguna') == "admin"): ?>
			
				<a href="<?= base_url('admin/tambah') ?>" class="btn btn-danger pull-right">Tambah Baby Sister +</a><br>
			
		<?php endif; ?>
    </div>
    <br>
    <br>
    <br>
    <div class="col-md-12">
		<!-- <div class="row">
			<?php foreach ($art as $row): ?>
			<div class="col-md-3">
				<div class="well well-small">
                    <p style="text-align: center;">Nama : <?= $row->nama ?></p>
					<a class="displayStyle" href="#"><img src="<?= base_url('foto/'.$row->id_art.'.png') ?>" class="img-responsive" /></a>
                  
					<h5>Clothings</h5>
					<p>
						<a class="btn btn-warning" href="#" > Hapus <i class="icon-delete"></i></a> 
						<a class="btn" href="<?= base_url('home/details') ?>">view details</a>
					</p>
					<p><span class="price"><small>$</small>400.00</span></p>
					
				</div>
			</div>	
			<?php endforeach; ?> -->
			
			<table class="table table-bordered table-hover" style="width:100%;" id="table_id">
				<thead>
					<tr>
						<th>Foto</th>
						<th>Nama Art</th>
						<th>Biaya Kontrak</th>
						<th>Deksripsi</th>
						<?php if ($this->session->userdata('pengguna') == "admin"): ?>
						<th>Action</th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($art as $row): ?>
					<?php 
						$query = $this->db->query('SELECT * FROM art WHERE id_art='.$row->id_art);
						$result = $query->row();
						if ($result->status != 'bekerja'):
					?>
					<tr>
						<td align="center"><img src="<?= base_url('foto/'.$result->id_art.'.png') ?>" class="img-responsive" width='90px' heigth='120px'/></td>
						<td><?= $result->nama ?></td>
						<td>Rp. <?= $result->gaji ?></td>
						<td><a class="btn" href="<?= base_url('home/details/'.$result->id_art) ?>">view details</a></td>
						<?php if ($this->session->userdata('pengguna') == "admin"): ?>
							<td><a class="btn btn-warning" href="<?= base_url('admin/edit/'.$result->id_art) ?>" > Edit <i class="icon-delete"></i></a> / <a class="btn btn-warning" href="<?= base_url('admin/hapus/'.$result->id_art) ?>" > Hapus <i class="icon-delete"></i></a> / <a class="btn btn-primary" href="<?= base_url('admin/approve/'.$result->id_art) ?>" > Approve <i class="icon-delete"></i></a></td>
						<?php endif; ?>
					</tr>
					<?php endif; ?>
				<?php endforeach; ?>
				</tbody>
			</table>
			
	</div>
	</div>
    </div>
	</div>
</div>
</div>