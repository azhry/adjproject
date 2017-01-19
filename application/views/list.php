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
			<div class="col-md-3 form-group">
				<input type="text" name="cari" class="form-control">
			</div>
			<div class="col-md-1 form-group">
				<input type="submit" name="btn_cari" value="Cari" class="btn btn-primary form-control">
			</div>
			<?= form_close() ?>
			<?php if ($this->session->userdata('pengguna') == "admin"): ?>
			<div class="col-md-8">
				<a href="<?= base_url('admin/tambah') ?>" class="btn btn-danger pull-right">Tambah Baby Sister +</a><br>
			</div>
		<?php endif; ?>
    </div>
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
			
			<table class="table table-bordered table-hover" style="width:100%;">
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
							<td><a class="btn btn-warning" href="<?= base_url('admin/edit/'.$result->id_art) ?>" > Edit <i class="icon-delete"></i></a> / <a class="btn btn-warning" href="<?= base_url('admin/hapus/'.$result->id_art) ?>" > Hapus <i class="icon-delete"></i></a> / <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="kontrakData('<?= $result->id_art ?>')"> Approve <i class="icon-delete"></i></button></td>
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <?= form_open('admin/approve') ?>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail</h4>
      </div>
      <div class="modal-body">
       
        	<div class="form-group">
			    <label for="email">Tanggal Mulai Kerja</label>
			    <input type="date" class="form-control" name="mulai_kerja" required>
			    <input type="hidden" class="form-control" name="id_art" id="id_art">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Tanggal Akhir Kerja</label>
			    <input type="date" class="form-control" name="akhir_kerja" required>
			  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" value="Approve" name="kirim" class="btn btn-primary">
        <?= form_close() ?>
      </div>
    </div>
			  </div>
</div>

<script type="text/javascript">
	function kontrakData(id) {
		$('#id_art').val(id);
	}
</script>