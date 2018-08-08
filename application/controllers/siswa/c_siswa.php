<?php
class C_siswa extends MY_Controller{

  public function __construct(){
    parent::__construct();

    $this->cekLogin();

    //validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "guru") {
      redirect('guru/c_guru');
  }
   else if ($this->session->userdata('level') == "admin") {
      redirect('admin/c_admin');
  }
}

  public function index()
  {
    $this->load->model('M_siswa');
    $isi['content']   ='siswa/konten';
    $isi['menu']      ='<marquee>Selamat Datatng di Website E-Learning SMP Hajarmukti</marquee>';
    $isi['sub_menu']  ='Beranda';
    $isi['elerning']  =$this->M_siswa->elearning();
    $this->load->view('siswa/home',$isi);
  }
  function jadwal(){
    $this->load->model('M_mhs');
    $isi['content']   ='mhs/jadwal';
    $isi['sub_menu']  ='Jadwal Mata Kuliah';
    $isi['data'] = $this->M_mhs->tampil_jadwal();
    $this->load->view('mhs/home', $isi);

  }
  function kontak_dosen(){
    $this->load->model('M_mhs');
    $isi['content']   ='mhs/kontak_dosen';
    $isi['sub_menu']  ='Kontak Dosen';
    $isi['data'] = $this->M_mhs->tampil_kontak();
    $this->load->view('mhs/home', $isi);

  }
  function mata_kuliah(){
    $this->load->model('M_mhs');
    $isi['content']   ='mhs/mk';
    $isi['sub_menu']  ='Daftar Mata Kuliah';
    $isi['data'] = $this->M_mhs->tampil_mk();
    $this->load->view('mhs/home', $isi);

  }
}
?>
