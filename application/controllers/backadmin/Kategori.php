<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Kategori_model','km');
        if(!$this->session->userdata('admin_pkbm')){
            redirect('backadmin/login');
        }
    }
	public function index(){
        $data['view'] = 'back/kategori/index';
        $data['kategori'] = $this->km->getKategori()->result();
		$this->load->view('back/layouts',$data);
	}
    public function edit($id = false){
        if($id){
            if($this->input->method(TRUE) == "POST"){
                $dataInsert['nama_kategori'] = $this->input->post('kategori');
                if($this->km->updateKategori($id,$dataInsert)){
                    redirect('backadmin/kategori');
                }
            }
            $data['view'] = 'back/kategori/edit';
            $data['data'] = $this->km->getKategori($id)->row();
		    $this->load->view('back/layouts',$data);
            
        }else{
            show_404();
        }
    }
    public function tambah(){
        if($this->input->method(TRUE) == "POST"){
            $dataInsert['nama_kategori'] = $this->input->post('kategori');
            if($this->km->insertKategori($dataInsert)){
                redirect('backadmin/kategori');
            }
            
        }
        $data['view'] = 'back/kategori/tambah';
        // $data['data'] = $this->km->getKategori($id)->row();
		$this->load->view('back/layouts',$data);
    }
    public function hapus($id = false){
        if($id){
            if($this->km->deleteKategori($id)){
                redirect('backadmin/kategori');
            }
        }else{
            show_404();
        }
    }
}
