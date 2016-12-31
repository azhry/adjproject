<div class="container">
	<div class="row">
	<div class="col-md-9">
		<h3 class="title"><span><?= $artikel->judul ?></span></h3>
		<div class="col-md-5" align="center">
			<img src="<?= base_url('foto/'.$artikel->gambar.'.png') ?>" alt="article header" class="img-responsive">
		</div>
		<div class="col-md-7">
			<?= $artikel->isi ?>
		</div>	
	</div>
	<div class="col-md-3">
		<h3 class="title"><span>List Komentar</span></h3>
		
		<div id="containerKomentar">
            <?php foreach ($komentar as $comment): ?>
            	<?php if ($comment->status == 0): ?>
		            <div class="well" style="width: 100%;">
		                <?php  
		                	$konsumen = $this->konsumen_model->get_data_byId_konsumen($comment->id_konsumen);
		                ?>
		                <h4><?= $konsumen->nama ?></h4>
		                <p><?= $comment->isi_komentar ?></p>
		                <p class="pull-right"><input type="button" class="btn btn-primary" onclick="submitKomentar(<?= $comment->id_komentar ?>, 1, <?= $comment->id_info ?>)" value="Setujui"> | <input type="button" class="btn btn-danger" name="" value="Tolak"><br></p>
		                
						<hr class="soften"/>
		            </div>
            	<?php endif; ?>
        	<?php endforeach; ?>
        </div>
	</div>
	</div>
</div>
<script src="<?= base_url('themes/js/jquery-1.8.3.min.js') ?>"></script>
<script type="text/javascript">
    function submitKomentar(id, status, id_info) {
        var url = '<?= base_url('admin/status_komentar/') ?>';
        url = url + id + '/';
        $.ajax({
            method  : "GET",
            url     : url + status,
            success : function(response) {
                // $("#komentar").val('');
                // $("#containerKomentar").prepend(response);
            	window.location = '<?= base_url('admin/view_artikel/') ?>' + id_info;
            },
            error   : function(e) {
                console.log(e);
            }
        });
        return false;
    }
</script>