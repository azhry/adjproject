<?php 
    class MY_Controller extends CI_Controller
    {
        public function POST($name) {
        	return $this->input->post($name);
        }

        public function upload($id, $tag_name = 'userfile') {
        	@unlink(realpath(APPPATH . '../foto/' . $id . '.png'));

        	$config = array(
        		'file_name'		=> $id . '.png',
        		'allowed_types'	=> 'jpg|jpeg|png|gif',
        		'upload_path'	=> realpath(APPPATH . '../foto')
        	);

        	$this->load->library('upload', $config);
        	$this->upload->do_upload($tag_name) ;
        }

        public function watermark()
        {
            $this->load->library('image_moo');
            $this->image_moo
                ->load(realpath(APPPATH . '../foto/azhary.png'))
                ->load_watermark(realpath(APPPATH . '../foto/1.png'))
                ->resize(400,400)
                ->watermark(2)
                ->save(realpath(APPPATH . '../foto/azhary.png'), true);

             if($this->image_moo->errors) print $this->image_moo->display_errors();
        }

        public function setflash($key, $msg) {
        	return $this->session->set_flashdata($key, $msg);
        }

        public function getflash($key) {
        	return $this->session->flashdata($key);
        }

        public function flashmsg($msg, $status) {
        	return $this->setflash('msg', '<div class="alert alert-'.$status.'">'.$msg.'</div>');
        }

        public function VIEW($file, $data = array())
        {
            return $this->load->view($file, $data);
        }

        public function SAVES($value = array())
        {
            return $this->session->set_userdata($value);
        }

        public function LOADS($key)
        {
            return $this->session->userdata($key);
        }

        public function Bulan($key)
        {
            switch ($key) {
                case 1:
                    return 'Januari';
                    break;
                case 2:
                    return 'Februari';
                    break;
                case 3:
                    return 'Maret';
                    break;
                case 4:
                    return 'April';
                    break;
                case 5:
                    return 'Mei';
                    break;
                case 6:
                    return 'Juni';
                    break;
                case 7:
                    return 'juli';
                    break;
                case 8:
                    return 'Agustus';
                    break;
                case 9:
                    return 'September';
                    break;
                case 10:
                    return 'Oktober';
                    break;
                case 11:
                    return 'November';
                    break;
                case 12:
                    return 'Desember';
                    break;
            }
        }
    }
    
?>