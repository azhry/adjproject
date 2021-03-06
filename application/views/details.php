﻿<!-- ======================================================================================================================== -->
<section id="mainBody">
<h2 class="title" align="center"><?= $art->nama ?></h2>

<div class="container">
    <div class="row">  
            <div class="col-md-3 well">
                <h4 class="title" align="center"><span>Cari Baby Sister</span></h4>
                <?= form_open('home/search', array("class" => "form-horizontal")) ?>
                    <div class="form-group">
                        <div>
                            <label for="kota" class="pull-left">Kota Anda:</label>
                        </div>
                        <div>
                            <select name="kota" id="feature_other_amenities" class="form-control">
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
                        <div>
                            <label for="pendidikan" class="pull-left">Pend. Terakhir</label>
                        </div>
                        <div>
                            <select name="pendidikan" id="feature_glazing" class="form-control">
                                            <option selected="selected" value="any">Semua</option>
                                            <option value="tidak_sekolah">Tidak Sekolah</option>
                                            <option value="sd">SD</option>
                                            <option value="smp">SMP</option>
                                            <option value="sma">SMA</option>
                                            <option value="Perguruan_Tinggi">Perguruan Tinggi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="agama" class="pull-left">Agama</label>
                        </div>
                        <div>
                            <select name="agama" id="property_tipology" class="form-control">
                                            <option selected="selected" value="any">Semua</option>
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
                        <div>
                            <label for="usia_max" class="pull-left">Usia (Max)</label>
                        </div>
                        <div>
                            <select name="usia_max" id="feature_bathroom" class="form-control">
                                            <option selected="selected" value="any">Semua</option>
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
                                            <option value="11">11</option>
                                            <option value="4">4</option>
                                            <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="gaji_max" class="pull-left">Gaji Bulanan (Max)</label>
                        </div>
                        <div>
                            <select name="gaji_max" id="property_price-lte" class="form-control">
                                        <option selected="selected" value="any">Semua</option>
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
                                            <option value="175000">Rp 175000</option>
                                            <option value="130000">Rp 130000</option>
                                            <option value="33">Rp 33</option>
                                            <option value="1">Rp 1</option>
                                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="gaji_min" class="pull-left">Gaji Bulanan (Min)</label>
                        </div>
                        <div>
                            <select name="gaji_min" id="property_price-gte" class="form-control">
                                        <option selected="selected" value="any">Semua</option>
                                            <option value="1">Rp 1</option>
                                            <option value="33">Rp 33</option>
                                            <option value="130000">Rp 130000</option>
                                            <option value="175000">Rp 175000</option>
                                            <option value="1000000">Rp 1000000</option>
                                            <option value="1100000">Rp 1100000</option>
                                            <option value="1200000">Rp 1200000</option>
                                            <option value="1300000">Rp 1300000</option>
                                            <option value="1400000">Rp 1400000</option>
                                            <option value="1500000">Rp 1500000</option>
                                            <option value="1600000">Rp 1600000</option>
                                            <option value="1700000">Rp 1700000</option>
                                            <option value="1800000">Rp 1800000</option>
                                            <option value="1900000">Rp 1900000</option>
                                            <option value="2000000">Rp 2000000</option>
                                            <option value="2200000">Rp 2200000</option>
                                            <option value="2300000">Rp 2300000</option>
                                            <option value="2400000">Rp 2400000</option>
                                            <option value="2500000">Rp 2500000</option>
                                            <option value="2600000">Rp 2600000</option>
                                            <option value="2700000">Rp 2700000</option>
                                            <option value="2750000">Rp 2750000</option>
                                            <option value="2800000">Rp 2800000</option>
                                            <option value="2900000">Rp 2900000</option>
                                            <option value="3000000">Rp 3000000</option>
                                            <option value="3200000">Rp 3200000</option>
                                            <option value="3500000">Rp 3500000</option>
                                            <option value="3750000">Rp 3750000</option>
                                            <option value="20000000">Rp 20000000</option>
                                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="suku" class="pull-left">Suku Asal</label>
                        </div>
                        <div>
                            <select name="suku" id="feature_dinning_space" class="form-control">
                                                <option selected="selected" value="any">Semua</option>
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
                        <div>
                            <label for="usia_min" class="pull-left">Usia (Min)</label>
                        </div>
                        <div>
                            <select name="usia_min" id="feature_bathroom" class="form-control">
                                            <option selected="selected" value="any">Semua</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="11">11</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="50">50</option>
                                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button class="btn btn-large btn-success"><span class="icon-search"> CARI</span></button>
                        </div>
                    </div>
                <?= form_close() ?>    
            </div>
            <div class="col-md-6" align="center">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>       
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?= base_url('foto/'.$art->id_art.'.png') ?>" alt="www.malasngoding.com">
                        </div>
                        <div class="item">
                            <img src="<?= base_url('foto/'.$art->id_art.'.png') ?>" alt="www.malasngoding.com">
                        </div>
                        <div class="item">
                            <img src="<?= base_url('foto/'.$art->id_art.'.png') ?>" alt="www.malasngoding.com">
                        </div>              
                    </div>
                </div>
            </div>                     
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Detail
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover" style="width: 100%;!important">
                            <tbody>
                                <tr>
                                    <td align="left">Nama</td>
                                    <td><?= $art->nama ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Jenis Kelamin</td>
                                    <td><?= $art->jenis_kelamin ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Agama</td>
                                    <td><?= $art->agama ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Status</td>
                                    <td><?= $art->status ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Asal</td>
                                    <td><?= $art->asal ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Usia</td>
                                    <td><?= $art->usia ?> Tahun</td>
                                </tr>
                                <tr>
                                    <td align="left">Suku</td>
                                    <td><?= $art->suku ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Keterampilan</td>
                                    <td><?php 
                                        if (!empty($art->keterampilan)) 
                                            foreach (json_decode($art->keterampilan) as $keterampilan) 
                                                echo $keterampilan . ', '; 
                                        else echo " - ";
                                        ?></td>
                                </tr>
                                <tr>
                                    <td align="left">Pengalaman</td>
                                    <td><?= $art->pengalaman ?> tahun</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Gaji Bulanan</td>    
                                </tr>

                                <tr>
                                    <td colspan="2"><h4>Rp. <?= $art->gaji ?></h4></td>    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-large btn-warning" href="<?= base_url('profil/checkout/'.$art->id_art) ?>"> PESAN SEKARANG </a>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12" align="center">
            <h3><strong>SHIPPING INFORMATIONS</strong></h3>
            <div class="">
                    <p>Setelah melakukan pemesanan akan di lakukan pembayaran</p> 
            </div>
        </div>
    </div>
</div>


    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('themes/js/smart.js') ?>"></script>
  </body>
</html>