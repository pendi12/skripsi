<?php
class C_mhs extends MY_Controller{

  public function __construct(){
    parent::__construct();

    $this->cekLogin();

    //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "dosen") {
      redirect('dosen/c_dosen');
  }
  else if ($this->session->userdata('level') == "administrator") {
      redirect('administrator/c_administrator');
  }
  else if ($this->session->userdata('level') == "admin") {
      redirect('admin/c_admin');
  }
}

  public function index()
  {
    $this->load->view('mhs/home');
  }
}
?>
