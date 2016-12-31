<?php
class Profil extends MY_Controller{

    protected $userid;
    protected $username;

    public function __construct() {
        parent::__construct();
        $this->userid     = $this->session->userdata('id_konsumen');
        $this->username   = $this->session->userdata('username');

        if (!isset($this->userid) or !isset($this->username)) {
            redirect('home/login');
            exit;
        }
    
        $this->load->model('konsumen_model');
        $this->load->model('art_model');
    }
    
    public function index()
    {        
        $konsumen = $this->konsumen_model->get_data_byId_konsumen($this->userid);

        $data = array(
            'nama'          => $konsumen->nama,
            'alamat'        => $konsumen->alamat,
            'agama'         => $konsumen->agama,
            'jenis_kelamin' => $konsumen->jenis_kelamin,
            'email'         => $konsumen->email,
            'no_telp'       => $konsumen->no_telp
        );

        $this->load->view('page/component/header');
        $this->load->view('page/profil/index', $data);
    }

    public function chat()
    {
        $this->load->model('chat_model');
        $data = array(
            'chats'  => $this->chat_model->get()
        );

        $this->load->view('page/component/header');
        $this->load->view('chat', $data);
        $this->load->view('page/component/footer');
    }

    public function tampil_chat()
    {
        $this->load->model('chat_model');
        $data = array(
            'chats'  => $this->chat_model->get()
        );

        foreach ($data['chats'] as $chat)
        {
            if ($chat->pengirim == 'admin')
            {
                echo '<div class="col-md-9 pull-right well">
                            '.$chat->chat.'
                        </div>';
            }
            else
            {
                echo '<div class="col-md-9 pull-left well">
                            '.$chat->chat.'
                        </div>';
            }
        }
    }

    public function submit_chat()
    {
        // if ($this->input->post('submit'))
        // {
            $data = array(
                'id_admin'      => 1,
                'id_pengguna'   => $this->userid,
                'chat'          => $this->input->post('chat'),
                'pengirim'      => 'pengguna'
            );

            $this->load->model('chat_model');
            $this->chat_model->insert($data);

            echo '<div class="col-md-9 pull-left well">
                '.$data['chat'].'
            </div>';
        //}
    }
    
    public function edit()
    {
        if ($this->POST('submit')) 
        {
            $data = array(
                'nama'          => $this->POST('nama'),
                'alamat'        => $this->POST('alamat'),
                'agama'         => $this->POST('agama'),
                'jenis_kelamin' => $this->POST('jenis_kelamin'),
                'email'         => $this->POST('email'),
                'no_telp'       => $this->POST('no_telp')
            );

            $this->konsumen_model->update($this->userid, $data);
            $this->flashmsg('Edit profil berhasil!', 'success');
            redirect('profil/edit');
            exit;
        }

        $konsumen = $this->konsumen_model->get_data_byId_konsumen($this->userid);

        $data = array(
            'nama'          => $konsumen->nama,
            'alamat'        => $konsumen->alamat,
            'agama'         => $konsumen->agama,
            'jenis_kelamin' => $konsumen->jenis_kelamin,
            'email'         => $konsumen->email,
            'no_telp'       => $konsumen->no_telp
        );

        $this->load->view('page/component/header');
        $this->load->view('page/profil/edit_profil', $data);
    }

    public function checkout() 
    {
        $id_art = $this->uri->segment(3);

        if (!isset($id_art))
        {
            redirect('home');
            exit;
        }

        $art = $this->art_model->get_data_byId_art($id_art);
        $konsumen = $this->konsumen_model->get_data_byId_konsumen($this->userid);
        $data = array(
            'art'       => $art,
            'konsumen'  => $konsumen
        );

        $this->load->view('page/component/header');
        $this->load->view('page/home/testimoni', $data);
        $this->load->view('page/component/footer');
    }

    public function pesan()
    {
        $id_art = $this->uri->segment(3);

        if (!isset($id_art))
        {
            redirect('home');
            exit;
        }

        $art = $this->art_model->get_data_byId_art($id_art);
        $konsumen = $this->konsumen_model->get_data_byId_konsumen($this->userid);
        $data = array(
            'art'       => $art,
            'konsumen'  => $konsumen
        );

        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('laporan_model');
        $laporan = array(
            'id_art'        => $art->id_art,
            'nama_art'      => $art->nama,
            'waktu_laporan' => date("Y-m-d")
        );
        $this->laporan_model->insert($laporan);
        $this->load->model('order_art_model');

        $order_data = array(
            'id_art'        => $id_art,
            'id_konsumen'   => $this->userid,
            'mulai_kerja'   => date('Y-m-d H:i:s'),
            'akhir_kerja'   => date('Y-m-d H:i:s'),
            'order_date'    => date('Y-m-d H:i:s') 
        );

        $this->order_art_model->insert($order_data);
        
        $html = $this->load->view('struk_data_pemesanan', $data, true);
        $pdfFilePath = "Struk Data Pemesanan.pdf";
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($pdfFilePath, "D");

        echo "Anda berhasil memesan";
    }

    public function komentar()
    {
        if (isset($_GET['komentar'], $_GET['id_info'], $this->userid))
        {
            $this->load->model('komentar_model');
            $komentar = $_GET['komentar'];
            $id_info = $_GET['id_info'];

            date_default_timezone_set("Asia/Jakarta");

            $data = array(
                'id_pengguna'   => $this->userid,
                'id_konsumen'   => $this->userid,
                'id_info'        => $id_info,
                'waktu'         => date('Y-m-d H:i:s'),
                'isi_komentar'  => $komentar
            );

            $this->komentar_model->insert($data);

            $konsumen = $this->konsumen_model->get_data_byId_konsumen($this->userid);

            echo '<div class="well" style="width: 50%;"><h4>'.$konsumen->nama.'</h4><p>'.$data['isi_komentar'].'</p><p><small>'.$data['waktu'].'</small></p></div>';
        }
    }
}
?>