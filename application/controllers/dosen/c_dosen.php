<?php
class C_dosen extends MY_Controller{

  public function __construct(){
    parent::__construct();

    $this->cekLogin();

    //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "mahasiswa") {
      redirect('c_mhs');
  }
  if ($this->session->userdata('level') == "admin") {
      redirect('c_admin');
  }
  if ($this->session->userdata('level') == "administrator") {
      redirect('c_administrator');
  }
}

  public function index()
  {

    $isi['content']   ='dosen/tampilan_content';
    
    $this->load->view('dosen/home', $isi);
  }
}
?>
