<div class="container ">
					<div class="row ">
						<div class="col-md-12 tumbnail">
							<h1 style="margin-top:0">Recent News</h1>
							<div class="row">
								<div class="col-md-7">
									<div id="myCarousel" class="carousel image-carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<img src=" <?= base_url('foto/OPEN.png') ?>" class="img-responsive" alt="">
											</div>
											<?php 
											if(isset($artikel)) :
											foreach ($artikel as $post): ?>
											<div class="item">
												<img src="<?= base_url('foto/'.$post->gambar.'.png') ?>" class="img-responsive" alt="">
												<div class="carousel-caption">
													<h4>
													<a href="<?= base_url('home/detail_tips/'.$post->id_info) ?>">
													<?= $post->judul ?></a>
													</h4>
													<p>
														 <?php substr($post->judul, 0,100) ?>
													</p>
												</div>
											</div>
											<?php endforeach; 
											endif;?>
										</div>
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active">
											</li>
											
											<li data-target="#myCarousel" data-slide-to="1">
											</li>
											<li data-target="#myCarousel" data-slide-to="2">
											</li>
											<li data-target="#myCarousel" data-slide-to="3">
											</li>
											<li data-target="#myCarousel" data-slide-to="4">
											</li>
											<li data-target="#myCarousel" data-slide-to="5">
											</li>
										</ol>
									</div>
								</div>
								<!--end col-md-5-->
								<div class="col-md-4 well">
									<ul class="list-group">
									<?php 
									if(isset($artikel)) :
									foreach ($artikel as $post): ?>
								  		<li class="list-group-item">
								  			<a href="<?= base_url('home/detail_tips/'.$post->id_info) ?>">
													<?= $post->judul ?></a>
								  		</li>								

									<?php 
									endforeach; 
									endif;?>
									</ul>
								</div>
								<!--end col-md-3-->
							</div>
							<div class="space20">
							<br>
							<br>
							</div>
						</div>
					</div>
</div>
<!-- 
//.$info->id_info. -->