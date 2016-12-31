<section id="mainBody">
		<div class="container">
		<h3 class="title"><span>Cetak Laporan</span></h3>
		    <ul class="breadcrumb">
				<li><a href="#">Home</a> <span class="divider">/</span></li>
				<li class="active">Cetak Laporan</li>
		    </ul>
			<div class="col-md-6 well">
			<u><h3>Cetak Laporan Administrasi Baby Syster</h3></u>
			<br>
			<?php if($this->session->userdata('pengguna')=="admin") : ?>
				<?= form_open('admin/laporan', array("class" => "form-horizontal")) ?>
			<?php elseif($this->session->userdata('pengguna')=="kepala") : ?>
				<?= form_open('kepala/laporan', array("class" => "form-horizontal")) ?>
			<?php endif; ?>
				<div class="form-group">
					<div class="col-md-3">
						<label>Tanggal Mulai</label>
					</div>
					<div class="col-md-6">
					  <input type="date" name="mulai" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						<label>Tanggal Akhir</label>
					</div>
					<div class="col-md-6">
					  <input type="date" name="akhir" class="form-control">
					</div>
				</div>
				<div class="form-group" align="center">
					<input class="btn btn-large btn-danger" type="submit" name="cetak" value="Cetak">
				</div>
					<?= form_close() ?>
				</div>
			</div>

		</div>

</section>

<!-- Footer
================================================== -->
<footer class="footer">
<div class="container">
<p class="pull-right"><a href="#">Terms and condition</a> &copy; Copyright 2013 Sell Anything. </p>
</div>
</div>
 </footer>
 <span id="toTop" style="display: none;"><span><i class="icon-angle-up"></i></span></span>
    <!--  javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('themes/js/jquery-1.8.3.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('themes/js/smart.js') ?>"></script>
  </body>
</html>