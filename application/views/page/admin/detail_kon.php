<h3 class="title"><span>Detail Konsumen</span></h3>

<div class="container">
	<div class="row well">
		<div class="col-md-12">
			<table class="table table-hover table-bordered" align="center">
				<thead>
					<tr>
						<th colspan="2"><?= $konsumen->nama ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td align="left">Alamat</td>
						<td><?= $konsumen->alamat ?></td>
					</tr>
					<tr>
						<td align="left">Agama</td>
						<td><?= $konsumen->agama ?></td>
					</tr>
					<tr>
						<td align="left">Jenis Kelamiin</td>
						<td><?= $konsumen->jenis_kelamin ?></td>
					</tr>
					<tr>
						<td align="left">Email</td>
						<td><?= $konsumen->email ?></td>
					</tr>
					<tr>
						<td align="left">No Telepon</td>
						<td><?= $konsumen->no_telp ?></td>
					</tr>
					<tr>
						<td align="left">Anak</td>
						<td>
							<?php 
								$anak = json_decode($konsumen->anak);
								for ($j=0; $j <count($anak); $j++) { 
									echo $anak[$j]->nama ." : " . $anak[$j]->usia. " tahun";
									echo "<br>";
								}
							?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>