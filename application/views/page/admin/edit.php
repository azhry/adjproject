
<!-- ======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Tambah Asisten Rumah Tangga</span></h3>
    <ul class="breadcrumb">
		<li><a href="#">Home</a> <span class="divider">/</span></li>
		<li class="active">Tambah</li>
    </ul>
	<div class="row">
		<div class="col-md-9 well">
        	<?php 
        		$msg = $this->session->flashdata('msg');
        		if (isset($msg))
        			echo $msg;
        	?>
        	 <?= form_open_multipart('admin/edit/' . $id_art , array("class" => "form-horizontal")) ?>
                <div class="form-group">
                    <div class="col-md-3">
                        <label for="nama">Nama <sup>*</sup></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="nama" id="nama" placeholder="Name" class="form-control" value="<?= $nama ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label for="usia">Usia (tahun)</label>
                    </div>
                    <div class="col-md-6">
                        <input required class="form-control" type="number" min="1" name="usia" id="usia" value="<?= $usia ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label  for="suku">Suku</label>
                    </div>
                    <div class="col-md-6">
                    <?php  
                        $list_suku = ['Jawa' => 'Jawa', 'Sunda' => 'Sunda', 'Banten' => 'Banten', 'NTT' => 'NTT', 'Lampung' => 'Lampung', 'Madura' => 'Madura', 'Melayu' => 'Melayu', 'Lainnya' => 'Lainnya'];
                        echo form_dropdown('suku', $list_suku, $suku, ['class' => 'form-control', 'id' => 'suku']);
                    ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="address">Asal</label>
                    </div>
                    <div class="col-md-6">
                        <?php  
                            $list_asal = ['any' => 'Semua'];
                            $temp = ['Jakarta', 'Surabaya', 'Medan', 'Bandung', 'Semarang', 'Ambon', 'Balikpapan', 'Banda Aceh', 'Bandar Lampung', 'Banjar', 'Banjar Baru', 'Banjarmasin', 'Batam', 'Batu', 'Baubau', 'Bekasi', 'Bengkulu', 'Binjai', 'Bima', 'Bitung', 'Blitar', 'Bogor', 'Bontang', 'Bukittinggi', 'Cilegon', 'Cimahi', 'Cirebon', 'Denpasar', 'Depok', 'Dumai', 'Gorontalo', 'Gunung Sitoli', 'Jambi', 'Jayapura', 'Kediri', 'Kendari', 'Klaten', 'Kotamobagu', 'Kupang', 'Langsa', 'Lhokseumawe', 'Lubuklinggau', 'Madiun', 'Magelang', 'Makassar', 'Madiun', 'Medan', 'Manado', 'Malang', 'Mojokerto', 'Metro', ];
                            foreach ($temp as $t)
                                $list_asal[strtolower($t)] = $t;
                            echo form_dropdown('asal', $list_asal, $asal, ['class' => 'form-control', 'id' => 'asal']);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="city">Gaji</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" min="0" name="gaji" id="gaji" class="form-control" value="<?= $gaji ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label  for="state">Jenis Kelamin</label>
                    </div>
                    <div class="col-md-6">
                        <?php  
                            $jk = ['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'];
                            echo form_dropdown('jenis_kelamin', $jk, $jenis_kelamin, ['id' => 'state', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="country">Pendidikan Terakhir</label>
                    </div>
                    <div class="col-md-6">
                        <?php  
                            $list_pendidikan = [
                                'Tidak Sekolah' => 'Tidak Sekolah',
                                'Sekolah Dasar' => 'Sekolah Dasar',
                                'Sekolah Menengah Pertama'  => 'Sekolah Menengah Pertama',
                                'Sekolah Menengah Atas'     => 'Sekolah Menengah Atas',
                                'Universitas'   => 'Universitas' 
                            ];
                            echo form_dropdown('pendidikan', $list_pendidikan, $pendidikan, ['id' => 'pendidikan', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="postcode">Agama</label>
                    </div>
                    <div class="col-md-6">
                        <?php  
                            $list_agama = [
                                'Islam'     => 'Islam',
                                'Budha'     => 'Budha',
                                'Katolik'   => 'Katolik',
                                'Kristen'   => 'Kristen',
                                'Hindu'     => 'Hindu',
                                'Lainnya'   => 'Lainnya' 
                            ];
                            echo form_dropdown('agama', $list_agama, $agama, ['id' => 'agama', 'class' => 'form-control']);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="pengalaman">Pengalaman Bekerja ( dalam tahun) </label>
                    </div>
                    <div class="col-md-3">
                        <input type="number" min="0" name="pengalaman" class="form-control" value="<?= $pengalaman ?>">
                    </div>
                    <div class="col-md-3">
                        <label  class="form-control">Tahun</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label  for="anak" class="pull-left">Tambah Keterampilan</label>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-danger" id="add-anak">+ Keterampilan</button>
                    </div>
                </div>
                <div class="col-md-12"  id="dynamic-form">
                    <?php foreach ($keterampilan as $row): ?>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label  for="keterampilan" class="pull-left">Nama Keterampilan</label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="keterampilan[]" placeholder="Nama Keterampilan" value="<?= $row ?>">
                            </div>
                        '</div>
                    <?php endforeach; ?>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#add-anak').on('click', function() {
                            $('#dynamic-form').append('<div class="form-group">' +
                                    '<div class="col-md-3">' +
                                        '<label  for="keterampilan" class="pull-left">Nama Keterampilan</label>' +
                                    '</div>' +
                                    '<div class="col-md-6">' +
                                        '<input class="form-control" type="text" name="keterampilan[]" placeholder="Nama Keterampilan">' +
                                    '</div>' +
                                '</div>');

                            return false;
                        });
                    });
                </script>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="foto">Foto Profil </label>
                    </div>
                    <div class="col-md-6">
                      <input type="file" name="foto" id="foto" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div align="center">
                        <input type="hidden" name="email_create" value="1">
                        <input type="hidden" name="is_new_customer" value="1">
                        <input class="btn btn-large btn-primary" name="edit" type="submit" value="Edit">
                    </div>
                </div>
        	<!-- </form> -->
        	<?= form_close() ?>
        </div>
	</div>
</div>
  </body>
</html>