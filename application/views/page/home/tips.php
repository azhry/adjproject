<div class="container">
	<h3 class="title">Tips / Artikel</h3>
	<div class="row">
	    <div class="col-sm-9">
	    <?php foreach ($artikel as $post) : ?>
	    	<div class="media">
			  <div class="media-left media-middle">
			    <img src="<?= base_url('foto/'.$post->gambar.'.png') ?>" class="media-object" style="width:250px">
			  </div>
			  <div class="media-body" style="text-align: left;!important">
			    <h4 class="media-heading"><?= $post->judul ?> <small><i>Posted on <?= $post->waktu ?></i></small></h4>
			    <p><?= substr($post->isi,5,(strlen($post->isi)/3)) ?></p>
			    <br>
			    <p><br><a class="pull-right" href="<?= base_url('home/detail_tips/'.$post->id_info) ?>"> .... Selengkapnya</a></p>
			  </div>
			</div>
			<hr class="soften"/>
		<?php endforeach; ?>
	    </div>
		<div class="col-sm-3">
			<div class="row">
				<?= form_open('home/tips') ?>
					<div class="col-md-8 form-group">
						<input type="text" name="cari" class="form-control">
					</div>
					<div class="col-md-4 form-group">
						<input type="submit" name="btn_cari" value="Cari" class="btn btn-primary form-control">
					</div>
				<?= form_close() ?>
			</div>
			<hr class="soften"/>
			<h3 class="title"><u>Populer Post</u></h3>
				<ul class="list-group">
						<?php foreach ($top as $data) : ?>
				  			<li class="list-group-item"><a href="<?= base_url('home/detail_tips/'.$data->id_info) ?>"><?= $this->info_model->get_data_byId_info($data->id_info)->judul ?></a></li>
				  		<?php endforeach; ?>
				</ul>
		</div>
	</div>
</div>