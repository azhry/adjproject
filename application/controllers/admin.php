<?php
class Admin extends MY_Controller{
    
    protected $id_admin;

    public function __construct()
    {
        parent::__construct();
        $this->id_admin = $this->LOADS('id_admin');
        if (!isset($this->id_admin))
        {
            redirect('home/login');
            exit;
        }
        $this->load->model('art_model');
    }

    public function index()
    {
        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/index');
    }
     public function tambah()
    {
        if ($this->POST('tambah'))
        {
            $data = array(
                'nama'          => $this->POST('nama'),
                'usia'          => $this->POST('usia'),
                'suku'          => $this->POST('suku'),
                'jenis_kelamin' => $this->POST('jenis_kelamin'),
                'asal'          => $this->POST('asal'),
                'gaji'          => $this->POST('gaji'),
                'agama'         => $this->POST('agama'),
                'status'        => 'tidak bekerja',
                'pendidikan'    => $this->POST('pendidikan'),
                'keterampilan'  => $this->POST('keterampilan')
            );

            $this->art_model->insert($data);
            $this->upload($this->db->insert_id(), 'foto');

            $this->flashmsg('Registrasi berhasil!', 'success');
            redirect('admin/tambah');
        }

        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/tambah');  
    }
     public function konsumen()
    {
        $this->load->view('page/admin/atas');
        $this->load->view('register');  
    }

    public function list_chat()
    {
        $this->load->model('chat_model');
        $data = array(
            'list_chat' => $this->chat_model->get_user_chat_list()
        );

        $this->load->view('page/admin/atas');
        $this->load->view('list_chat', $data);
    }

    public function submit_chat()
    {
        // if ($this->input->post('submit'))
        // {
            $data = array(
                'id_admin'      => $this->id_admin,
                'id_pengguna'   => $this->input->post('id_pengguna'),
                'chat'          => $this->input->post('chat'),
                'pengirim'      => 'admin'
            );

            $this->load->model('chat_model');
            $this->chat_model->insert($data);

            echo '<div class="col-md-3 pull-right well">
                '.$data['chat'].'
            </div>';
        //}
    }

    public function hidden_field($id_pengguna)
    {
        echo '<input type="hidden" name="id_pengguna" value="'. $id_pengguna .'">';
    }

    public function tampil_chat($id_pengguna)
    {
        if (!isset($id_pengguna))
        {
            redirect('admin/list_chat');
            exit;
        }

        $this->load->model('chat_model');
        $data = array(
            'chats' => $this->chat_model->get(array('id_pengguna' => $id_pengguna, 'id_admin' => $this->id_admin))
        );

        $this->load->model('konsumen_model');
        $user = $this->konsumen_model->get_data_byId_konsumen($id_pengguna);
        $nama = $user->nama;

        echo '<h3 class="title"><span>'.$nama.'</span></h3>';
        foreach ($data['chats'] as $chat)
        {
            if ($chat->pengirim == 'admin')
            {
                echo '<div class="col-md-9 pull-right well" align="right">
                            '.$chat->chat.'
                        </div>';
            }
            else
            {
                echo '<div class="col-md-9 pull-left well" align="left">
                            '.$chat->chat.'
                        </div>';
            }
        }
    }

    public function daftar_art()
    {
        $data = array(
            'art'   => $this->art_model->get_all()
        );

        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/list', $data);  
    }
    public function art()
    {
        $this->load->model('order_art_model');
        if ($this->input->post('btn_cari'))
        {
            $cari = $this->input->post('cari');
            $data = array(
                'art'   => $this->art_model->getDataLike(['nama' => $cari]),
                'jumlah_art'    => $this->art_model->rows
            );
        }
        else{
            $data = array(
                'art'           => $this->art_model->get_all(),
                'jumlah_art'    => $this->art_model->rows
            );  
        }
        $this->load->view('page/admin/atas');
        $this->load->view('list', $data);  
    }
    public function detail_laporan()
    {
        $this->load->model('laporan_model');
        $this->load->model('order_art_model');
        $this->load->model('art_model');
        $this->load->model('konsumen_model');

        $data['laporan'] = $this->laporan_model->get_all();

        $this->load->view('page/admin/atas');
        $this->load->view('detail_laporan', $data);
    }
    public function laporan()
    {
        $this->load->view('page/admin/atas');
        if ($this->input->post('cetak'))
        {
            $data = array(
                'mulai'     => $this->input->post('mulai'),
                'akhir'     => $this->input->post('akhir')
            );

            $this->load->model('order_art_model');
            $data = $this->order_art_model->get('mulai_kerja >= "' . $data['mulai'] . '" AND 
                mulai_kerja <= "' . $data['akhir'] . '"');

            $this->load->view('page/admin/cetak_laporan', array(
                'art'   => $data, 
                'mulai' => $this->input->post('mulai'),
                'akhir' => $this->input->post('akhir')
            ));

            $html = $this->load->view('page/admin/cetak_laporan', array(
                'art'   => $data, 
                'mulai' => $this->input->post('mulai'),
                'akhir' => $this->input->post('akhir')
            ), true);
            $pdfFilePath = "laporan.pdf";
            $this->load->library('m_pdf');
            $this->m_pdf->pdf->WriteHTML($html);
            $this->m_pdf->pdf->Output($pdfFilePath, "D");
        }
        else
        {
            $this->load->view('laporan');
        }  
    }
    
    public function info()
    {  
        if ($this->input->post('post'))
        {
            $this->load->model('info_model');

            $data = array(
                'judul'     => $this->input->post('judul'),
                'gambar'    => 'artikel_'.date('s'),
                'isi'       => $this->input->post('isi'),
                'waktu'     => date('Y-m-d H:i:s')
            );
            $this->info_model->insert($data);
            $id_artikel = $this->db->insert_id();
            $this->upload('artikel_'.date('s'), 'foto');
            $this->session->set_flashdata('berhasil', true);
        }

        $path = 'ckfinder';
        $width = '100%';
        $this->_editor($path, $width);
        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/info');  
    }

    public function _editor($path,$width) {
        //Loading Library For Ckeditor
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        //configure base path of ckeditor folder 
        $this->ckeditor->basePath = base_url() . 'ckeditor/';
        $this->ckeditor->config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = $width;
        //configure ckfinder with ckeditor config 
        $this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
    }

    public function hapus()
    {
        $id_art = $this->uri->segment(3);
        if (!isset($id_art))
        {
            $this->flashmsg('Anda gagal menghapus ART!', 'error');
            redirect('admin/art');
            exit;
        }

        $this->art_model->delete($id_art);
        $this->flashmsg('Anda berhasil menghapus ART!', 'success');
        redirect('admin/art');
        exit;
    }

    public function edit($id_art)
    {
        if (!isset($id_art))
        {
            redirect('admin/art');
            exit;
        }

        $art = $this->art_model->get_data_byId_art($id_art);
        $data = array(
            ''
        );

        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/tambah');   
    }

    public function approve($id_art)
    {
        if (!isset($id_art))
        {
            redirect('admin/art');
            exit;
        }

        $art = $this->art_model->update($id_art, array(
            'status'    => 'bekerja'
        ));

        redirect('admin/art');
        exit;
    }

     public function bekerja($id_art)
    {
        if (!isset($id_art))
        {
            redirect('admin/art');
            exit;
        }

        $art = $this->art_model->update($id_art, array(
            'status'    => 'tidak bekerja'
        ));

        redirect('admin/art');
        exit;
    }

    public function artikel()
    {
        $this->load->model('info_model');

        if ($this->input->post('btn_cari'))
        {
            $cari = $this->input->post('cari');

            $data = array(
                'artikel'   => $this->info_model->getDataLike(['judul' => $cari])
            );

            $data['pagination'] = "========================";
        }
        else {
            $data = array(
                'artikel'   => $this->info_model->get_all(),
            );

            //pagination settings
        $config['base_url'] = base_url('admin/artikel');
        $config['total_rows'] = $this->db->count_all('info');
        $config['per_page'] = "5";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="nav nav-pills" align="center" style="padding: 2px; margin-top: 0;">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $data['deptlist'] = $this->info_model->get_info_list($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();
        $data['artikel'] = $data['deptlist'];
        }

        
        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/list_artikel', $data);
    }

    public function view_artikel($id_artikel)
    {
        if (!isset($id_artikel))
        {
            redirect('admin/artikel');
            exit;
        }

        $this->load->model('konsumen_model');
        $this->load->model('komentar_model');

        $this->load->model('info_model');
        $data = array( 
            'artikel'   => $this->info_model->get_data_byId_info($id_artikel), 
            'komentar'  => $this->komentar_model->get_data_byCondition_descend(array('id_info' => $id_artikel))
        );
        $this->load->view('page/admin/atas');
        $this->load->view('detail_artikel', $data);
    }

    public function hapus_artikel($id_artikel)
    {
        if (!isset($id_artikel))
        {
            redirect('admin/artikel');
            exit;
        }

        $this->load->model('info_model');
        $this->info_model->delete($id_artikel);
        $this->flashmsg('Anda berhasil menghapus artikel', 'success');
        redirect('admin/artikel');
        exit;
    }

    public function hapus_laporan($id_laporan)
    {
        if (!isset($id_laporan))
        {
            redirect('admin/detail_laporan');
            exit;
        }

        $this->load->model('laporan_model');
        $this->laporan_model->delete($id_laporan);
        $this->flashmsg('Anda berhasil menghapus laporan', 'success');
        redirect('admin/detail_laporan');
        exit;
    }


    public function edit_artikel($id_artikel)
    {
        if (!isset($id_artikel))
        {
            redirect('admin/artikel');
            exit;
        }

        $this->load->model('info_model');
        if ($this->input->post('post'))
        {
            $data = array(
                'gambar'    => 'artikel_'.date('s'),
                'judul'     => $this->input->post('judul'),
                'isi'       => $this->input->post('isi')
            );

            $this->upload('artikel_'.date('s'), 'foto'); 

            $this->info_model->update($id_artikel, $data);
            $this->flashmsg('Artikel berhasil diedit', 'success');
            redirect('admin/artikel');
            exit;
        }

        $artikel = $this->info_model->get_data_byId_info($id_artikel);
        $data = array( 'artikel' => $artikel, 'edit' => true );
        $path = 'ckfinder';
        $width = '1150px';
        $this->_editor($path, $width);
        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/info', $data); 
    }

    public function status_komentar($id_komentar, $status)
    {
        if (!isset($status, $id_komentar))
        {
            redirect('admin/artikel');
            exit;
        } 

        $this->load->model('komentar_model');
        $this->komentar_model->update($id_komentar, array('status' => $status));       
    
        redirect('admin/view_artikel/' . $id_komentar);
        exit;
    }

    public function list_konsumen()
    {
        $this->load->model('konsumen_model');
        if ($this->input->post('btn_cari'))
        {
            $cari = $this->input->post('cari');
            $data = array(
                'konsumen'   => $this->konsumen_model->getDataLike(['nama' => $cari])
            );
        }
        else {

        $data = array(
            'konsumen'   => $this->konsumen_model->get_all()
        );
        }

        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/list_customer', $data);   
    }
    public function detail_konsumen()
    {

        $id_konsumen = $this->uri->segment(3);
        $this->load->model('konsumen_model');
        $data = array(
            'konsumen'   => $this->konsumen_model->get_data_byId_konsumen($id_konsumen)
        );
        $this->load->view('page/admin/atas');
        $this->load->view('page/admin/detail_kon',$data); 
    }
}
?>