<h3 class="title"><span>Artikel / Info Mengenai Baby Syster</span></h3>

<div class="container">
	<?php foreach ($artikel as $post): ?>
		<div class="col-md-9">
	        <h3 ><?= $post->judul ?></h3>
			<p>
				<?= substr($post->isi, 0,300)  ?>
			</p>
			<h4><a class="pull-right" href="<?= base_url('home/detail_tips') ?>"> .... Selengkapnya</a></h4>
		</div>
		<!-- <div class="span3">
			<h3>Recent Post</h3>
			<li>A</li>
			<li>B</li>
		</div> -->
	<?php endforeach; ?>	
</div>