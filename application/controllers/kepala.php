<?php
class Kepala extends MY_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->id_admin = $this->LOADS('id_kepala');
        if (!isset($this->id_admin))
        {
            redirect('home/login');
            exit;
        }
        $this->load->model('art_model');
    }

    public function index()
    {
        $this->load->model('laporan_model');
         $data = array(
                'laporan'   =>  $this->laporan_model->get_all(),
                'grafik'    => $this->laporan_model->grafik()
            );
        $this->load->view('page/kepala/atas');
        $this->load->view('page/kepala/index' ,$data);
    }

    public function hapus_laporan($id_laporan)
    {
        if (!isset($id_laporan))
        {
            redirect('kepala/detail_laporan');
            exit;
        }

        $this->load->model('laporan_model');
        $this->laporan_model->delete($id_laporan);
        $this->flashmsg('Anda berhasil menghapus laporan', 'success');
        redirect('kepala/detail_laporan');
        exit;
    }

    public function detail_laporan()
    {
        $this->load->model('laporan_model');
        $this->load->model('order_art_model');
        $this->load->model('art_model');
        $this->load->model('konsumen_model');
        if ($this->input->post('btn_cari'))
        {
            $cari = $this->input->post('cari');
            $data = array(
                'laporan'   => $this->laporan_model->getDataLike(['nama_art' => $cari])
            );
        }
        else {
            $data['laporan'] = $this->laporan_model->get_all();
        }
        $this->load->view('page/kepala/atas');
        $this->load->view('detail_laporan', $data);
    }

    public function laporan()
    {
        $this->load->view('page/kepala/atas');
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
            $this->m_pdf->pdf->Output($pdfFilePath, "I");
        }
        else
        {
            $this->load->view('laporan');
        }  
    }

}	

?>