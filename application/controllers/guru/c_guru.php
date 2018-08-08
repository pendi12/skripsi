<?php
class C_guru extends MY_Controller{

  public function __construct(){
    parent::__construct();

    $this->cekLogin();

    //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "siswa") {
      redirect('siswa/c_siswa');
  }
    else if ($this->session->userdata('level') == "admin") {
      redirect('admin/c_admin');
  }
  
}

  public function index()
  {

    $isi['content']   ='guru/konten';
    $isi['menu']  ='Halaman Utama';
    $this->load->view('guru/home', $isi);
  }
  public function e_learning()
  {
    $this->load->model('M_guru');
    $isi['content']   ='guru/elearning';
    $isi['menu']      ='Input Materi Pembelajaran pada website E-Learning SMP Hajarmukti';
    $isi['mapel']     =$this->M_guru->view_mapel();
    $this->load->view('guru/home', $isi);
  }
  function save_elearning(){
    $this->load->model('M_guru');
    if($this->M_guru->save_elearning()){
      redirect('guru/c_guru/e_learning');
    }
    else{
      redirect('guru/c_guru');
    }
  }
  
  
}
?>
