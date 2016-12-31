<div class="container">
	<div class="col-md-12">
		<h3 class="title">Tips / Artikel</h3>
	</div>
	<div class="row">
		<?= form_open('home/tips') ?>

			<div class="col-md-3 form-group">
				<input type="text" name="cari" class="form-control">
			</div>
			<div class="col-md-1 form-group">
				<input type="submit" name="btn_cari" value="Cari" class="btn btn-primary form-control">
			</div>
			<?= form_close() ?>
	</div>
	<div class="row">
		<div class="col-md-8 well">
			<?php foreach ($artikel as $post): ?>
			<div>
				<img src="<?= base_url('foto/'.$post->gambar.'.png') ?>" class="col-md-3">
		        <h2 align="left" class="title"><?= $post->judul ?> <small class="pull-right"><?= $post->waktu ?></small></h2>
				<p class="pull-left">
					<?= substr($post->isi, 0,300)  ?>
					<br><a class="pull-right" href="<?= base_url('home/detail_tips/'.$post->id_info) ?>"> .... Selengkapnya</a>
				</p>
			<hr class="soften"/>
			</div>
		<?php endforeach; ?>
		</div>
	<div class="col-md-4" align="left">
		<h3 class="title"><u>Populer Post</u></h3>
			<ul class="list-group">
			  <li class="list-group-item">First item</li>
			  <li class="list-group-item">Second item</li>
			  <li class="list-group-item">Third item</li>
			</ul>
	</div>
</div>