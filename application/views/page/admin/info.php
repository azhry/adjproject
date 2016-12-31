<h3 class="title"><span>Post Info</span></h3>

<div class="container">
		<?php if($this->session->flashdata('berhasil')): ?>
			<div class="alert alert-success">
				Artikel berhasil di-post
			</div>
		<?php endif; ?>

		<?php  
			$msg = $this->session->flashdata('msg');
			if (isset($msg)) echo $msg;
		?>

		<?php
			if (isset($edit)) echo form_open_multipart('admin/edit_artikel/'.$artikel->id_info , array("class" => "form-horizontal")); 
			else echo form_open_multipart('admin/info', array("class" => "form-horizontal")); 
		?>
			<div class="form-group">
				<div class="col-md-3">
				<label for="foto" class="control-label">Foto Header</label>
				</div>
				<div class="col-md-9">
					<input type="file" name="foto" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					<label for="judul" class="control-label">Judul Artikel / Info</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="judul" class="form-control" value="<?php echo isset($artikel->judul) ? $artikel->judul : ''; ?>" />
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-3">
				<label for="isi" class="control-label">Isi</label>
				</div>
				<div class="col-md-9">
					<?php 
						if (isset($artikel->isi)) echo $this->ckeditor->editor('isi', $artikel->isi);
						else echo $this->ckeditor->editor('isi', '');
					?>
				</div>
			</div>
			<input type="submit" name="post" value="Post" class="btn btn-success btn-large" />
		<?= form_close() ?>
</div>