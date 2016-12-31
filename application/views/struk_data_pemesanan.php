<table align="center" width="80%">
	<tr>
		<th colspan="4"><l>Data Pemesanan Baby Sister</th>
	</tr>
	<tr>
		<td colspan="4">Data Diri Baby Sister:</td>
	</tr>
	<tr>
		<td rowspan="8" align="center" width="45%">
			<img src="<?= base_url('foto/'.$art->id_art.'.png') ?>" width="240" heigth="320"/>
		</td>
		<td >Nama</td>
		<td>:</td>
		<td><?= $art->nama ?></td>
	</tr>
	<tr>
		<td >Jenis Kelamin</td>
		<td>:</td>
		<td><?= $art->jenis_kelamin ?></td>
	</tr>
	<tr>
		<td >Agama </td>
		<td>:</td>
		<td><?= $art->agama ?></td>
	</tr>
	<tr>
		<td >Status </td>
		<td>:</td>
		<td><?= $art->status ?></td>
	</tr>
	<tr>
		<td >Asal Daerah </td>
		<td>:</td>
		<td><?= $art->asal ?></td>
	</tr>
	<tr>
		<td >Usia </td>
		<td>:</td>
		<td><?= $art->usia ?></td>
	</tr>
	<tr>
		<td >Suku Daerah </td>
		<td>:</td>
		<td><?= $art->suku ?></td>
	</tr>
	<tr>
		<td >Gaji </td>
		<td>:</td>
		<td><?= $art->gaji ?></td>
	</tr>
	<tr>
		<td align="center">Keterampilan</td>
		<td colspan="3"><?= $art->keterampilan ?></td>
	</tr>
	<tr>
		<td colspan="4"><br></td>
	</tr>
	<tr align="center">
		<td colspan="4">---------------------------------------</td>
	</tr>
	<tr align="center">
		<td colspan="4">Data Diri Konsumen Pemesan</td>
	</tr>
	<tr>
		<td rowspan="4"></td>
		<td >Nama</td>
		<td >:</td>
		<td><?= $konsumen->nama ?></td>
	</tr>
	<tr>
		<td >Alamat </td>
		<td>:</td>
		<td><?= $konsumen->alamat ?></td>
	</tr>
	<tr>
		<td >Jenis Kelamin </td>
		<td>:</td>
		<td><?= $konsumen->jenis_kelamin ?></td>
	</tr>
	<tr>
		<td >No Telepon</td>
		<td>:</td>
		<td><?= $konsumen->no_telp ?></td>
	</tr>
	<tr>
		<td colspan="4"><br></td>
	</tr>
	<tr>
		<td colspan="4"><br></td>
	</tr>
	<tr>
		<td style="text-align: center;" colspan="4">Silahkan Melakukan Transfer Pembayaran Ke No rekening Kami<br>Bank BCA 09827136125124<br>Atas Nama Adi Jaya<br>
		Harap Melakukan Pembayaran Sebelum Pukul 19:00 WIB	
		</td>
	</tr>
</table>