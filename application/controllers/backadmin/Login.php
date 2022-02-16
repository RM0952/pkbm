<?php
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model','lm');
        
    }
    public function index(){
        if($this->session->userdata('admin_pkbm')){
            redirect('backadmin/pendaftar');
        }
        $data['msg'] = '';
        if($this->input->method(TRUE) == "POST"){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            // var_dump($this->input->post());die();
            // var_dump($this->lm->getAdmin($username,$password)->num_rows());die();
            if($this->lm->getAdmin($username,$password)->num_rows() > 0){
                $dataAdmin = $this->lm->getAdmin($username,$password)->row();
                $session['username'] = $dataAdmin->username;
                $session['password'] = $dataAdmin->password;
                $this->session->set_userdata('admin_pkbm',$session);
                redirect('backadmin/pendaftar');
                
                // var_dump('b');die();
            }else{
                $data['msg'] = 'data tidak ada';
            }
        }
        $this->load->view('back/login',$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
}