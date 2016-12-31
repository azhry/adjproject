<h3 class="title"><u><span>Chat Dengan Pengguna</span></u></h3>

<div class="container">
	<div class="row">
		<div class="col-md-3 well">
		<h3 class="title"><span>List Chat</span></h3>
			<ul class="nav nav-list ">
				<?php foreach ($list_chat as $user): ?>
				<?php  
					$query = $this->db->query('SELECT * FROM konsumen WHERE id_konsumen='.$user->id_pengguna);
				?>
				<li>
					<a onclick="tampil_chat(<?= $user->id_pengguna ?>)">
						<?= $query->row()->nama ?>		
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="col-md-9">
			<div class="chat-container" style="height: 500px;
												overflow-y: scroll;">
				
			</div>
			<div class="col-md-12">
			<br>
				<form id="chatForm">
	                <div class="form-group" align="center">
	                    <textarea name="chat" id="chat" class="form-control" rows="4"></textarea>
	                    <div id="hidden_field">
	                    	
	                    </div>
	                </div>
	                <input type="submit" class="btn btn-success pull-right" id="kirim" name="submit" value="Kirim" />    
            	</form>
			</div>
		</div>
	</div>	
</div>
<script src="<?= base_url('themes/js/jquery-1.8.3.min.js') ?>"></script>
<script type="text/javascript">
	var id_pengguna;

	function tampil_chat(id_pengg)
	{
		$('.chat-container').load('<?= base_url('admin/tampil_chat/') ?>'  + id_pengg);
		$('#hidden_field').load('<?= base_url('admin/hidden_field/') ?>'  + id_pengg);
		id_pengguna = id_pengg;
		return false;
	}

	$(document).ready(function() {
		$('#kirim').on('click', function() {
			$.ajax({
				type: 'POST',
				url: '<?= base_url("admin/submit_chat") ?>',
				data: { chat: $("#chat").val(), id_pengguna: id_pengguna },
				success: function(response) {
					$(".chat-container").append(response);
					$("#chat").val('');
				},
				error: function(e) {
					console.log(e);
				}
			});

			return false;
		});
	});
</script>