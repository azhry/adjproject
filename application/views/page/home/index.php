<!--konten produk unggulan-->
<h3 class="title"><span>Baby Sitter Tersedia</span></h3>
<div class="container">
	<div class="col-md-12 thumbnail">
			<?php foreach ($art as $babysitter):  ?>
				<?php if ($babysitter->status != 'bekerja'): ?>
				<div class="col-md-3">
					<div class="well well-small">
	                    <p style="text-align: center;"><?= $babysitter->nama ?></p>
						<a class="displayStyle" href="#"><img src="<?= base_url('foto/'.$babysitter->id_art.'.png') ?>" class="img-responsive" width="300" heigth="400"/></a>
						<p>
							 <?= "Rp.".$babysitter->gaji ?>
							<a class="btn pull-right" href="<?= base_url('home/details/'.$babysitter->id_art) ?>">view details</a>
						</p>
						<p><!-- <span class="price"><small>$</small>400.00</span> --></p>
						
					</div>
				</div>	
				<?php endif; ?>
			<?php endforeach; ?>
	</div>
</div> 


<!--konten produk unggulan-->
<h3 class="title"><span>Baby Sitter Unggulan</span></h3>
<div class="container">
	<div class="col-md-12 thumbnail">
			<?php foreach ($art_unggulan as $babysitter):  ?>
				<?php if ($babysitter->status != 'bekerja'): ?>
				<div class="col-md-3">
					<div class="well well-small">
	                    <p style="text-align: center;"><?= $babysitter->nama ?></p>
						<a class="displayStyle" href="#"><img src="<?= base_url('foto/'.$babysitter->id_art.'.png') ?>" class="img-responsive" width="300" heigth="400"/></a>
	                  
						<h5><?php echo "Pengalaman ".$babysitter->keterampilan." Tahun";  ?></h5>
						<p>
							 <?= "Rp.".$babysitter->gaji ?>
							<a class="btn pull-right" href="<?= base_url('home/details/'.$babysitter->id_art) ?>">view details</a>
						</p>
						<p><!-- <span class="price"><small>$</small>400.00</span> --></p>
						
					</div>
				</div>	
				<?php endif; ?>
			<?php endforeach; ?>
	</div>
</div> 