<?php
class C_admin extends MY_Controller{

  public function __construct(){
    parent::__construct();

    $this->cekLogin();

    //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "mahasiswa") {
      redirect('mhs/c_mhs');
  }
  else if ($this->session->userdata('level') == "dosen") {
      redirect('dosen/c_dosen');
  }
  else if ($this->session->userdata('level') == "administrator") {
      redirect('administrator/c_administrator');
  }

}

  public function index()
  {
    $this->load->view('admin/home');
  }

}
?>
