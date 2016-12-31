
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
        	 <?= form_open_multipart('admin/tambah' , array("class" => "form-horizontal")) ?>
                <div class="form-group">
                    <div class="col-md-3">
                        <label for="nama">Nama <sup>*</sup></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="nama" id="nama" placeholder="Name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label for="usia">Usia (tahun)</label>
                    </div>
                    <div class="col-md-6">
                        <select name="usia" id="usia" class="form-control">
                                                    <option value="50">50</option>
                                                    <option value="49">49</option>
                                                    <option value="48">48</option>
                                                    <option value="47">47</option>
                                                    <option value="45">45</option>
                                                    <option value="44">44</option>
                                                    <option value="43">43</option>
                                                    <option value="42">42</option>
                                                    <option value="41">41</option>
                                                    <option value="40">40</option>
                                                    <option value="39">39</option>
                                                    <option value="38">38</option>
                                                    <option value="37">37</option>
                                                    <option value="36">36</option>
                                                    <option value="35">35</option>
                                                    <option value="34">34</option>
                                                    <option value="33">33</option>
                                                    <option value="32">32</option>
                                                    <option value="31">31</option>
                                                    <option value="30">30</option>
                                                    <option value="29">29</option>
                                                    <option value="28">28</option>
                                                    <option value="27">27</option>
                                                    <option value="26">26</option>
                                                    <option value="25">25</option>
                                                    <option value="24">24</option>
                                                    <option value="23">23</option>
                                                    <option value="22">22</option>
                                                    <option value="21">21</option>
                                                    <option value="20">20</option>
                                                    <option value="19">19</option>
                                                    <option value="18">18</option>
                                                    <option value="17">17</option>
                                                    <option value="16">16</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label  for="suku">Suku</label>
                    </div>
                    <div class="col-md-6">
                    <select name="suku" id="suku" class="form-control">
                        <option value="jawa">Jawa</option>
                        <option value="sunda">Sunda</option>
                        <option value="banten">Banten</option>
                        <option value="NTT">NTT</option>
                        <option value="lampung">Lampung</option>
                        <option value="madura">Madura</option>
                        <option value="melayu">Melayu</option>
                        <option value="lainnya">Lainnya</option>
                   </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="address">Asal</label>
                    </div>
                    <div class="col-md-6">
                        <select name="asal" class="form-control">
                                                            <option selected="selected" value="any">Semua</option>
                                                            <option value="jakarta">Jakarta</option>
                                                            <option value="surabaya">Surabaya</option>
                                                            <option value="medan">Medan</option>
                                                            <option value="bandung">Bandung</option>
                                                            <option value="semarang">Semarang</option>
                                                            <option value="ambon">Ambon</option>
                                                            <option value="balikpapan">Balikpapan</option>
                                                            <option value="banda aceh">Banda Aceh</option>
                                                            <option value="bandar lampung">Bandar Lampung</option>
                                                            <option value="banjar">Banjar</option>
                                                            <option value="banjar baru">Banjar Baru</option>
                                                            <option value="banjarmasin">Banjarmasin</option>
                                                            <option value="batam">Batam</option>
                                                            <option value="batu">Batu</option>
                                                            <option value="baubau">Baubau</option>
                                                            <option value="bekasi">Bekasi</option>
                                                            <option value="bengkulu">Bengkulu</option>
                                                            <option value="bima">Bima</option>
                                                            <option value="binjai">Binjai</option>
                                                            <option value="bitung">Bitung</option>
                                                            <option value="blitar">Blitar</option>
                                                            <option value="bogor">Bogor</option>
                                                            <option value="bontang">Bontang</option>
                                                            <option value="bukittinggi">Bukittinggi</option>
                                                            <option value="cilegon">Cilegon</option>
                                                            <option value="cimahi">Cimahi</option>
                                                            <option value="cirebon">Cirebon</option>
                                                            <option value="denpasar">Denpasar</option>
                                                            <option value="depok">Depok</option>
                                                            <option value="dumai">Dumai</option>
                                                            <option value="gorontalo">Gorontalo</option>
                                                            <option value="gunung sitoli">Gunung Sitoli</option>
                                                            <option value="jambi">Jambi</option>
                                                            <option value="jayapura">Jayapura</option>
                                                            <option value="kediri">Kediri</option>
                                                            <option value="kendari">Kendari</option>
                                                            <option value="kota klaten">Kota Klaten</option>
                                                            <option value="kotamobagu">Kotamobagu</option>
                                                            <option value="kupang">Kupang</option>
                                                            <option value="langsa">Langsa</option>
                                                            <option value="lhokseumawe">Lhokseumawe</option>
                                                            <option value="lubuklinggau">Lubuklinggau</option>
                                                            <option value="madiun">Madiun</option>
                                                            <option value="magelang">Magelang</option>
                                                            <option value="makassar">Makassar</option>
                                                            <option value="malang">Malang</option>
                                                            <option value="manado">Manado</option>
                                                            <option value="mataram">Mataram</option>
                                                            <option value="metro">Metro</option>
                                                            <option value="mojokerto">Mojokerto</option>
                                                            <option value="padang">Padang</option>
                                                            <option value="padang sidempuan">Padang Sidempuan</option>
                                                            <option value="pagaralam">Pagaralam</option>
                                                            <option value="palangkaraya">Palangkaraya</option>
                                                            <option value="palembang">Palembang</option>
                                                            <option value="palopo">Palopo</option>
                                                            <option value="palu">Palu</option>
                                                            <option value="pangkalpinang">Pangkalpinang</option>
                                                            <option value="parepare">Parepare</option>
                                                            <option value="pasuruan">Pasuruan</option>
                                                            <option value="payakumbuh">Pakuyumbuh</option>
                                                            <option value="pakalongan">Pakalongan</option>
                                                            <option value="pekanbaru">Pekanbaru</option>
                                                            <option value="pematangsiantar">Pematangsiantar</option>
                                                            <option value="pontianak">Pontianak</option>
                                                            <option value="prabumulih">Prabumulih</option>
                                                            <option value="probolinggo">Probolinggo</option>
                                                            <option value="purwokerto">Purwokerto</option>
                                                            <option value="salatiga">Salatiga</option>
                                                            <option value="samarinda">Samarinda</option>
                                                            <option value="serang">Serang</option>
                                                            <option value="singkawang">Singkawang</option>
                                                            <option value="sorong">Sorong</option>
                                                            <option value="sukabumi">Sukabumi</option>
                                                            <option value="surakarta">Surakarta</option>
                                                            <option value="tangerang">Tangerang</option>
                                                            <option value="tangerang selatan">Tangerang Selatan</option>
                                                            <option value="tanjungbalai">Tanjungbalai</option>
                                                            <option value="tanjungpinang">Tanjungpinang</option>
                                                            <option value="tarakan">Tarakan</option>
                                                            <option value="tasikmalaya">Tasikmalaya</option>
                                                            <option value="tebingtinggi">Tebingtinggi</option>
                                                            <option value="tegal">Tegal</option>
                                                            <option value="ternate">Ternate</option>
                                                            <option value="yogyakarta">Yogyakarta</option>
                                                            <option value="luar_negeri">Luar Negeri</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="city">Gaji</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="gaji" id="gaji">
                                                    <option value="20000000">Rp 20000000</option>
                                                    <option value="3750000">Rp 3750000</option>
                                                    <option value="3500000">Rp 3500000</option>
                                                    <option value="3200000">Rp 3200000</option>
                                                    <option value="3000000">Rp 3000000</option>
                                                    <option value="2900000">Rp 2900000</option>
                                                    <option value="2800000">Rp 2800000</option>
                                                    <option value="2750000">Rp 2750000</option>
                                                    <option value="2700000">Rp 2700000</option>
                                                    <option value="2600000">Rp 2600000</option>
                                                    <option value="2500000">Rp 2500000</option>
                                                    <option value="2400000">Rp 2400000</option>
                                                    <option value="2300000">Rp 2300000</option>
                                                    <option value="2200000">Rp 2200000</option>
                                                    <option value="2000000">Rp 2000000</option>
                                                    <option value="1900000">Rp 1900000</option>
                                                    <option value="1800000">Rp 1800000</option>
                                                    <option value="1700000">Rp 1700000</option>
                                                    <option value="1600000">Rp 1600000</option>
                                                    <option value="1500000">Rp 1500000</option>
                                                    <option value="1400000">Rp 1400000</option>
                                                    <option value="1300000">Rp 1300000</option>
                                                    <option value="1200000">Rp 1200000</option>
                                                    <option value="1100000">Rp 1100000</option>
                                                    <option value="1000000">Rp 1000000</option>
                                                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label  for="state">Jenis Kelamin</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" id="state" name="jenis_kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="country">Pendidikan Terakhir</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="pendidikan" id="pendidikan">
                            <option value="tidak sekolah">Tidak Sekolah</option>
                            <option value="sd">Sekolah Dasar</option>
                            <option value="smp">Sekolah Menengah Pertama</option>
                            <option value="sma">Sekolah Menengah Atas</option>
                            <option value="kuliah">Universitas</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="postcode">Agama</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="agama" id="agama">
                            <option value="islam">Islam</option>
                            <option value="budha">Budha</option>
                            <option value="katolik">Katolik</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="lainnya">Lainnya</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                    <label  for="mobile">Pengalaman Bekerja ( dalam tahun) </label>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="keterampilan" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label  class="form-control">Tahun</label>
                    </div>
                </div>
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
                        <input class="btn btn-large btn-primary" name="tambah" type="submit" value="Register">
                    </div>
                </div>
        	<!-- </form> -->
        	<?= form_close() ?>
        </div>
	</div>
</div>
  </body>
</html>