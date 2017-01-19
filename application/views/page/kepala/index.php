<div class="container">
	<h3 class="title"><span>Portal Kepala Yayasan</span></h3>
	<div class="well">
		<p align="center">
			Selamat Datang di Portal Kepala Yayasan Silahkan Pilih Apa yang akan Anda Lakukan
		</p>
	</div>
	<div class="row well">
		<div class="col-md-12">
			<h3 class="title"><span>Detail Pemesanan ART Yayasan</span></h3>
			<div id="gp">
				
			</div>
			<script>
      			Morris.Bar({
				  element: 'gp',
				  data: [
				   <?php foreach ($grafik as $data): ?>
				    { y: '<?= $data->bulan ?>', a: <?= $data->jumlah ?> },
				   <?php endforeach; ?>
				  ],
				  xkey: 'y',
				  ykeys: ['a'],
				  labels: ['Jumlah Order']
				});	
      		</script>
		</div>	
	</div>
</div>

  </body>
</html>