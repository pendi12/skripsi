<?php defined('BASEPATH') OR exit('No direct script access allowed');
class C_master extends MY_Controller{

  public function __construct(){
    parent::__construct();

    $this->cekLogin();

    
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

  public function siswa(){
    $this->load->model('M_master');
    $isi['content']   ='admin/v_siswa';
    $isi['menu']      ='Data Murid';
    $isi['siswa']     = $this->M_master->siswa();
    $this->load->view('admin/home',$isi);
  }
  function save_siswa(){
    $this->load->model('M_master');
    $this->M_master->save_siswa();
    redirect('admin/c_master/siswa');
  }
  function delete_siswa($nis){
    $this->load->model('M_master');
    $nama=$this->M_master->delete_siswa($nis);
    redirect('admin/c_master/view_siswa');
  }
  function edit_siswa($nis){
    $this->load->model('M_master');
    $data['menu']   ='Update Data Murid';
    $data['content']='admin/edt_siswa';
    $data['edit']   =$this->M_master->edit_siswa($nis);
    $this->load->view('admin/home',$data);
  }
  function simpan_edit_siswa(){
    $nis=$this->input->post('nis');
    $nama_siswa=$this->input->post('nama_siswa');
    $kd_kelas=$this->input->post('kd_kelas');    
    $tgl_lahir=$this->input->post('tgl_lahir');
    $nama_ayah=$this->input->post('nama_ayah');
    $nama_ibu=$this->input->post('nama_ibu'); 
    $alamat=$this->input->post('alamat');

    $this->load->model('M_master');
    $data['edit']=$this->M_master->simpan_edit_siswa($nis,$nama_siswa, $kd_kelas, $tgl_lahir, $nama_ayah, $nama_ibu,$alamat);
    redirect('admin/c_master/siswa');
  }
  public function guru(){
    $this->load->model('M_master');
    $isi['content']='admin/v_guru';
    $isi['menu']  ='Data Guru';
    $isi['guru']  =$this->M_master->guru();
    $this->load->view('admin/home',$isi);
  }
  function save_guru(){
    $this->load->model('M_master');
    $this->M_master->save_guru();
    redirect('admin/c_master/guru');
  }
  function edit_guru($kd_guru){
    $this->load->model('M_master');
    $data['menu']   ='Update Data Guru';
    $data['content']='admin/edt_guru';
    $data['edit']   =$this->M_master->edit_guru($kd_guru);
    $this->load->view('admin/home',$data);
  }
  function simpan_edit_guru(){
    $kd_guru=$this->input->post('kd_guru');
    $nama_guru=$this->input->post('nama_guru');
    $alamat_guru=$this->input->post('alamat_guru');    
    $no_hp=$this->input->post('no_hp');
    $email=$this->input->post('email');

    $this->load->model('M_master');
    $data['edit']=$this->M_master->simpan_edit_guru($kd_guru,$nama_guru, $alamat_guru, $no_hp, $email);
    redirect('admin/c_master/guru');
  }
  function delete_guru($kd_guru){
    $this->load->model('M_master');
    $nama=$this->M_master->delete_guru($kd_guru);
    redirect('admin/c_master/guru');
  }
  public function mapel(){
    $this->load->model('M_master');
    $isi['content']   ='admin/v_mapel';
    $isi['menu']      ='Data Mata Pelajaran';
    $isi['mapel'] = $this->M_master->mapel();
    $this->load->view('admin/home',$isi);
  }
  function save_mapel(){
    $this->load->model('M_master');
    $this->M_master->save_mapel();
    redirect('admin/c_master/mapel');
  }
  public function elerning(){
    $this->load->model('M_master');
    $isi['content']='admin/elerning';
    $isi['menu']  ='E-Learning';
    $isi['el']  =$this->M_master->elerning();
    $this->load->view('admin/home',$isi);
  }
  function delete_elerning($id_elerning){
    $this->load->model('M_master');
    $nama=$this->M_master->delete_elerning($id_elerning);
    redirect('admin/c_master/elerning');
  }

}

