<?php defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends MY_Controller{

  public function __construct(){
    parent::__construct();

    $this->cekLogin();

    
    if ($this->session->userdata('level') == "siswa") {
      redirect('siswa/c_siswa');
  }
  else if ($this->session->userdata('level') == "guru") {
      redirect('guru/c_guru');
  }

}

  public function index()
  {
    $isi['content']   ='admin/konten';
    $isi['menu']      ='<marquee>Selamat Datang di Halaman Utama E-Learning SMP Harjamukti</marquee>';
    $this->load->view('admin/home',$isi);
  }
  public function view_user(){
    $this->load->model('Model_users');
    $isi['content']   ='admin/v_user';
    $isi['menu']      ='Data User';
    $isi['daftar_user'] = $this->Model_users->view_all_user();
    $this->load->view('admin/home',$isi);
  }
  function save_user(){
    $this->load->model('Model_users');
    $this->Model_users->save_user();
    redirect('admin/c_admin/view_user');
  }
  function delete_user($id){
    $this->load->model('Model_users');
    $username=$this->Model_users->delete_user($id);
    redirect('admin/c_admin/view_user');
  }
  function edit_user($username){
    $this->load->model('Model_users');
    $data['menu']   ='Update User';
    $data['content']='admin/user';
    $data['edit']   =$this->Model_users->edit_user($username);
    $this->load->view('admin/home',$data);
  }
  function simpan_edit_user(){
    $nama=$this->input->post('nama');
    $username=$this->input->post('username');    
    $password=md5($this->input->post('password'));
    $level=$this->input->post('level');
    $active=$this->input->post('active');

    
    $this->load->model('Model_users');
    $data['edit']=$this->Model_users->simpan_edit_user($nama, $username, $password, $level, $active);
    redirect('admin/c_admin/view_user');
  }
  
}

