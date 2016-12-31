<?php
class Home extends MY_Controller{

    protected $userid;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('art_model');
        $this->load->model('komentar_model');
        $this->load->model('konsumen_model');
        $this->load->model('info_model');
    }
    
    public function index()
    {
        $data ['content'] = 'page/home/index';
        $data ['art'] = $this->art_model->get_all();
        $data ['art_unggulan'] = $this->art_model->get_limit();
        $data ['artikel'] = $this->info_model->get_limit();
        $this->load->view('layout',$data);
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
                'art'           => $this->order_art_model->get_all(),
                'jumlah_art'    => $this->art_model->rows
            );  
        }
        $this->load->view('page/component/header');
        $this->load->view('list', $data);  
    }

    public function about()
    {
        $this->load->view('page/component/header');
        $this->load->view('page/home/about');  
    }
    public function testimoni()
    {
        $this->load->view('page/component/header');
        $this->load->view('page/home/testimoni');
    }

    public function contact()
    {
        $this->load->view('page/component/header');
        $this->load->view('page/home/contact');
    }

    public function tips()
    {
        $this->load->model('info_model');
        if ($this->input->post('btn_cari'))
        {
            $cari = $this->input->post('cari');
            $data = array(
                'artikel'   => $this->info_model->getDataLike(['judul' => $cari])
            );
        }
        else{
            $data['artikel'] = $this->info_model->get_all_descending();
        }
        $this->load->view('page/component/header');
        $this->load->view('page/home/tips', $data);
    }

    public function detail_tips()
    {
        $id_info = $this->uri->segment(3);
        if (!isset($id_info))
        {
            redirect('home/tips');
            exit;
        }

        $this->load->model('info_model');
        $this->load->model('komentar_model');
        $data['artikel'] = $this->info_model->get_data_byId_info($id_info);
        $data['komentar'] = $this->komentar_model->get_data_byCondition_descend(array('id_info' => $id_info, 'status' => 1));

        $this->load->view('page/component/header');
        $this->load->view('page/home/detail_tips', $data);
    }

    public function details()
    {
        $id_art = $this->uri->segment(3);
        if (!isset($id_art))
        {
            redirect('home');
            exit;
        }

        $art = $this->art_model->get_data_byId_art($id_art);
        $komentar = $this->komentar_model->get_data_byCondition_descend(array('id_art' => $id_art));
        $data = array(
            'art'       => $art,
            'komentar'  => $komentar
        );

        $this->load->view('page/component/header');
        $this->load->view('details', $data);    
    }

    public function about_us()
    {
        $this->load->view('page/component/header');
        $this->load->view('about_us');
    }

    public function contact_us()
    {
        $this->load->view('page/component/header');
        $this->load->view('contact_us');
    }

    public function search()
    {
        $this->load->model('search_model');
        $art = $this->search_model->select()
                            ->suku($this->POST('suku'))
                            ->pendidikan($this->POST('pendidikan'))
                            ->asal_kota($this->POST('kota'))
                            ->agama($this->POST('agama'))
                            ->usia($this->POST('usia_max'), $this->POST('usia_min'))
                            ->gaji($this->POST('gaji_max'), $this->POST('gaji_min'))
                            ->execute();

        //$art = $this->search_model->cari($this->POST('usia_max'),$this->POST('usia_min'),$this->POST('suku'),$this->POST('kota'),$this->POST('gaji_max'),$this->POST('gaji_min'),$this->POST('agama'),$this->POST('pendidikan'));
        $data = array(
            'art'     => $art
        );

        // echo $this->search_model->sql;
        // exit;
        
        $data ['artikel'] = $this->info_model->get_limit();
        $this->load->view('page/component/header');
        $this->load->view('page/component/search');
        $this->load->view('page/home/search',$data);
        $this->load->view('page/component/footer');
    }

    public function register()
    {
        if ($this->POST('register')) {
            $data = array(
                'username'      => $this->POST('username'),
                'nama'          => $this->POST('nama'),
                'email'         => $this->POST('email'),
                'jenis_kelamin' => $this->POST('jenis_kelamin'),
                'agama'         => $this->POST('agama'),
                'pass'          => md5($this->POST('password')),
                'no_telp'       => $this->POST('mobile'),
                'alamat'        => $this->POST('address'),
            );

            $nama_anak = $this->POST('nama_anak');
            $usia_anak = $this->POST('usia_anak');

            $anak = array();
            for ($i = 0; $i < count($nama_anak); $i++)
                $anak []= array('nama' => $nama_anak[$i], 'usia' => $usia_anak[$i]);
            $anak = json_encode($anak);
            $data['anak'] = $anak;

            $this->load->model('konsumen_model');
            $this->konsumen_model->insert($data);
            $this->upload($data['username'], 'foto');

            $this->flashmsg('Registrasi berhasil!', 'success');
            redirect('home/register');
            exit;
        }
        
        $this->load->view('page/component/header');
        $this->load->view('register');
    }

    public function login()
    {

        if ($this->POST('login'))
        {
            $pengguna = array('konsumen', 'admin', 'kepala');

            if (in_array($this->POST('pengguna'), $pengguna))
            {
                $data = array(
                    'email' => $this->POST('email'),
                    'pass'  => md5($this->POST('password'))
                );

                $this->load->model('login_model');

                if ($this->POST('pengguna') == "konsumen")
                {
                    $data = $this->login_model->cek_login_konsumen($data);

                    if ($this->login_model->rows == 1)
                    {
                        $user_session = array(
                            'id_konsumen'   => $data->id_konsumen,
                            'username'      => $data->username,
                            'pengguna'      => 'konsumen'
                        );

                        $this->SAVES($user_session);
                        redirect('profil');
                        exit;
                    }
                    else
                    {
                        $this->flashmsg('Login gagal!', 'error');
                        redirect('home/login');
                        exit;
                    }
                }
                else if ($this->POST('pengguna') == "admin")
                {
                    $data = $this->login_model->cek_login_admin(array(
                        'username'  => $this->POST('email'),
                        'pass'      => md5($this->POST('password'))
                    ));

                    if ($this->login_model->rows == 1)
                    {
                        $user_session = array(
                            'id_admin'      => $data->id_admin,
                            'username'      => $data->username,
                            'pengguna'      => 'admin'
                        );

                        $this->SAVES($user_session);
                        redirect('admin');
                        exit;
                    }
                    else
                    {
                        $this->flashmsg('Login gagal!', 'error');
                        redirect('home/login_admin');
                        exit;
                    }
                }
                else if ($this->POST('pengguna') == "kepala")
                {
                    $data = $this->login_model->cek_login_kepala_yayasan(array(
                        'username'  => $this->POST('email'),
                        'pass'      => md5($this->POST('password'))
                    ));

                    if ($this->login_model->rows == 1)
                    {
                        $user_session = array(
                            'id_kepala'     => $data->id_user,
                            'username'      => $data->username,
                            'pengguna'      => 'kepala'
                        );

                        $this->SAVES($user_session);
                        redirect('kepala');
                    }
                    else
                    {
                        $this->flashmsg('Login gagal!', 'error');
                        redirect('home/login_admin');
                        exit;
                    }
                }
            }
        }

        $this->load->view('page/component/header');
        $this->load->view('login(2)');
    }

    public function login_admin()
    {
        $this->load->view('page/component/header');
        $this->load->view('login_admin');   
    }

    public function checkout()
    {
        $data ['content']='checkout';
        $this->load->view('layout',$data);
    }

    public function topology()
    {
        $data ['content']='topology';
        $this->load->view('layout',$data);
    }

    public function products()
    {
        $data ['content']='products';
        $this->load->view('layout',$data);
    }

}
?>