<h3 class="title"><span><?= $artikel->judul ?></span></h3>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<img src="<?= base_url('foto/'.$artikel->gambar.'.png') ?>"  width="100%" heigth="100%"/></a>
		</div>
		<div class="col-md-9" align="left">
			<?= $artikel->isi ?>
		</div>
	</div>
	<hr class="soften"/>
<h3 class="title"><span>Testimoni</span></h3>
    <div class="container">
        <div class="col-md-3">
            <form id="formKomentar" onsubmit="submitKomentar(); return false;">
                <div class="form-group">
                    <textarea name="komentar" id="komentar" class="controls" style="width: 100%;" rows="4" placeholder="Komentar anda..."></textarea>
                    <input type="hidden" name="id_info" value="<?= $artikel->id_info ?>" />
                </div>
                <input type="submit" class="btn btn-success" value="Post Komentar" />    
            </form>
            <h2>Komentar</h2>
            <div id="containerKomentar">
                <?php foreach($komentar as $comment): ?>
                    <div class="well" style="width: 100%;">
                        <?php  
                            $konsumen = $this->konsumen_model->get_data_byId_konsumen($comment->id_konsumen);
                        ?>
                        <h4><?= $konsumen->nama ?></h4>
                        <p><?= $comment->isi_komentar ?></p>
                        <p><small><?= $comment->waktu ?></small></p>
                        <hr class="soften"/>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <br><br><br>

    <script src="<?= base_url('themes/js/jquery-1.8.3.min.js') ?>"></script>
    <script type="text/javascript">
        function submitKomentar() {
            var queryString = $("#formKomentar").serialize();
            var url = '<?= base_url('profil/komentar?') ?>' + queryString;
            $.ajax({
                method  : "GET",
                url     : url + status,
                success : function(response) {
                    $("#komentar").val('');
                    $("#formKomentar").prepend('Komentar anda menunggu persetujuan admin agar dapat tampil');
                },
                error   : function(e) {
                    console.log(e.responseText);
                }
            });
            return false;
        }
    </script>
    
</div>