<h3 class="title"><span>Chat Dengan Admin</span></h3>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="chat-container" style="height: 400px;
												overflow-y: scroll;">
				<?php foreach ($chats as $chat):  ?>
					<?php if ($chat->pengirim == 'admin'): ?>
						<div class="col-md-9 pull-right well">
							<?= $chat->chat ?>
						</div>
					<?php else: ?>
						<div class="col-md-9 pull-left well">
							<?= $chat->chat ?>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
			<div class="col-md-12">
				<form id="chatForm">
	                <div class="form-group">
	                    <textarea name="chat" id="chat" class="form-control" style="width: 100%;" rows="4"></textarea>
	                </div>
	                <input type="submit" class="btn btn-success pull-right" id="kirim" name="submit" value="Kirim" />    
            	</form>
			</div>
		</div>
	</div>	
</div>
<script src="<?= base_url('themes/js/jquery-1.8.3.min.js') ?>"></script>
<script type="text/javascript">
	//$(document).ready(function() {
		$('#kirim').on('click', function() {
			$.ajax({
				type: 'POST',
				url: '<?= base_url("profil/submit_chat") ?>',
				data: { chat: $("#chat").val() },
				success: function(response) {
					$(".chat-container").append(response);
					$("#chat").val('');
				},
				error: function(e) {
					console.log(e.responseText);
				}
			});

			return false;
		});

		setInterval(function() {
			$('.chat-container').load('<?= base_url("profil/tampil_chat") ?>');
		}, 2000);
	//});
</script>