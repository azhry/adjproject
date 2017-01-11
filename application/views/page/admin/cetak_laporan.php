<h3 class="title"><span>Data Laporan Baby Sitter</span></h3>

<div class="container">
	<table class="table table-bordered" style="width: 100%">
		<tr>
			<td colspan="5" align="right"><i><?php echo $mulai; ?> sampai <?php echo $akhir; ?></i></td>
		</tr>
		<tr>
			<th>No</th>
			<th>Nama Art</th>
			<th>Tanggal Mulai Kerja</th>
			<th>Tanggal Berakhir</th>
			<th>Konsumen</th>
		</tr>
		<?php $i = 0; foreach ($art as $row): ?>
			<tr>
				<td><?php echo ++$i; ?></td>
				<td>
					<?php  
						$query = $this->db->query('SELECT * FROM art WHERE id_art='.$row->id_art);
						echo $query->row()->nama;
					?>
				</td>
				<td>
					<?php echo $row->mulai_kerja; ?>
				</td>
				<td>
					<?php echo $row->akhir_kerja; ?>
				</td>
				<td>
					<?php 
						$query = $this->db->query('SELECT * FROM konsumen WHERE id_konsumen='.$row->id_konsumen);
						echo $query->row()->nama;
					?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>