<h3 class="title"><span>Baby Sitter</span></h3>
	<!-- Dot Indicators -->
	<!-- Dot Indicators -->
    <div class="container">
    <div class="col-md-12">
    	<a href="<?= base_url('admin/tambah') ?>" class="btn btn-danger pull-right">Tambah Baby Sister +</a><br>
    </div>
    <div class="col-md-12">
		<div class="row">
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
			<?php endforeach; ?>
	</div>
	</div>
    </div>
	</div>
</div>
</div>