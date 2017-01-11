<!--konten produk unggulan-->
<h3 class="title"><span>Baby Sitter Tersedia</span></h3>
<div class="container">
	<div class="row">
		<div class="col-md-12 thumbnail">
			<div class="row">
				<?php foreach ($art as $babysitter):  ?>
					<?php if ($babysitter->status != 'bekerja'): ?>
					<div class="col-md-3" style="height: 400px;!important">
						<div class="panel panel-default">
							<div class="panel-heading">
								<b><?= $babysitter->nama ?></b>
							</div>
							<div class="panel-body">
								<div>
									<a class="displayStyle" href="<?= base_url('home/details/'.$babysitter->id_art) ?>">
			                    		<img src="<?= base_url('foto/'.$babysitter->id_art.'.png') ?>" class="img img-responsive"/>
			                    	</a>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-md-6">
										<h4><?= "Rp.".$babysitter->gaji ?></h4>
									</div>
									<div class="col-md-6 pull-right">
										<a class="btn btn-default" href="<?= base_url('home/details/'.$babysitter->id_art) ?>">view details</a>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div> 


<!--konten produk unggulan-->
<h3 class="title"><span>Baby Sitter Unggulan</span></h3>
<div class="container">
	<div class="row">
		<div class="col-md-12 thumbnail">
			<div class="row">
				<?php foreach ($art_unggulan as $babysitter):  ?>
					<?php if ($babysitter->status != 'bekerja'): ?>
					<div class="col-md-3">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<b><?= $babysitter->nama ?></b>
							</div>
							<div class="panel-body">
								<div>
									<a class="displayStyle" href="<?= base_url('home/details/'.$babysitter->id_art) ?>">
			                    		<img src="<?= base_url('foto/'.$babysitter->id_art.'.png') ?>" class="img img-responsive"/>
			                    	</a>
								</div>
		                    	<div>
		                    		<p>
		                    			<?php echo "Pengalaman Kerja : ".$babysitter->pengalaman." Tahun";  ?>
		                    		</p>
		                    	</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-md-6">
										<h4><?= "Rp.".$babysitter->gaji ?></h4>
									</div>
									<div class="col-md-6 pull-right">
										<a class="btn btn-default" href="<?= base_url('home/details/'.$babysitter->id_art) ?>">view details</a>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
		
	</div>
</div> 