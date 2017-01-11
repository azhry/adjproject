<h3 class="title"><span>Daftar Baby Sitter Yang Bekerja</span></h3>

<div class="container">
	<table class="table table-bordered table-hover" style="width:100%;" id="table_id">
		<tr>
			<th>No</th>
			<th>Nama Art</th>
			<th>Tanggal Mulai Kerja</th>
			<th>Tanggal Berakhir</th>
			<th>Konsumen</th>
			<th>Action</th>
		</tr>
		<?php $i = 0; foreach ($art as $row): ?>
		<?php if ($row->status == 'bekerja'): ?>
		<tr>
			<td><?= ++$i ?></td>
			<td><?= $row->nama ?></td>
			<td>
				<?php  
					$query = $this->db->query("SELECT mulai_kerja, akhir_kerja, id_konsumen FROM order_art WHERE id_art=". $row->id_art);
					if ($query->num_rows() > 0)
						echo $query->row()->mulai_kerja;
				?>
			</td>
			<td>
				<?php  
					if ($query->num_rows() > 0)
						echo $query->row()->akhir_kerja;
				?>
			</td>
			<td>
				<?php
					if ($query->num_rows() > 0)
					{
						$query = $this->db->query("SELECT nama FROM konsumen WHERE id_konsumen=".$query->row()->id_konsumen);
						if ($query->num_rows() > 0)
							echo $query->row()->nama;
					}  
				?>
			</td>
			<td>
				<a class="btn btn-danger" href="<?= base_url('admin/bekerja/'.$row->id_art) ?>" > Disapprove <i class="icon-delete"></i></a>
			</td>
		</tr>
		<?php endif; ?>
		<?php endforeach; ?>
	</table>
</div>