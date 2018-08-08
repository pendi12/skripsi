<?php 

class M_master extends CI_Model{
	
	function siswa(){
	$query=$this->db->query("SELECT *FROM tb_siswa ORDER BY nis ASC");
    return $query->result();
	}
	function save_siswa(){
		$simpan_data=array(
			'nis'=>$this->input->post('nis'),
			'nama_siswa'=>$this->input->post('nama_siswa'),
			'kd_kelas'=>$this->input->post('kd_kelas'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'nama_ayah'=>$this->input->post('nama_ayah'),
			'nama_ibu'=>$this->input->post('nama_ibu'),
            'alamat'=>$this->input->post('alamat')
			);
		$simpan=$this->db->insert('tb_siswa',$simpan_data);
		return $simpan;
	}
	function delete_siswa($nis){
      $query=$this->db->query("DELETE FROM tb_siswa WHERE nis='$nis'");
    }
    function edit_siswa($nis)
    {
        $q="SELECT * FROM tb_siswa WHERE nis='$nis'";
        $query=$this->db->query($q);
        return $query->row();
    }
 
    function simpan_edit_siswa($nis, $nama_siswa, $kd_kelas, $tgl_lahir, $nama_ayah, $nama_ibu,$alamat)
    {
        $data = array(
            'nis'             => $nis,
            'nama_siswa'      => $nama_siswa,
            'kd_kelas'        => $kd_kelas,
            'tgl_lahir'       => $tgl_lahir,
            'nama_ayah'       => $nama_ayah,     
            'nama_ibu'        => $nama_ibu,   
            'alamat'          => $alamat

        );
        $this->db->where('nis', $nis);
        $this->db->update('tb_siswa', $data);    
    }
    function guru(){
        $query=$this->db->query("SELECT *FROM tb_guru ORDER BY kd_guru ASC");
        return $query->result();
    }
    function save_guru(){
        $simpan_data=array(
            'kd_guru'=>$this->input->post('kd_guru'),
            'nama_guru'=>$this->input->post('nama_guru'),
            'alamat_guru'=>$this->input->post('alamat_guru'),
            'no_hp'=>$this->input->post('no_hp'),
            'email'=>$this->input->post('email')
            );
        $simpan=$this->db->insert('tb_guru',$simpan_data);
        return $simpan;
    }
    function delete_guru($kd_guru){
      $query=$this->db->query("DELETE FROM tb_guru WHERE kd_guru='$kd_guru'");
    }
    function edit_guru($kd_guru)
    {
        $q="SELECT * FROM tb_guru WHERE kd_guru='$kd_guru'";
        $query=$this->db->query($q);
        return $query->row();
    }
 
    function simpan_edit_guru($kd_guru, $nama_guru, $alamat_guru, $no_hp, $email)
    {
        $data = array(
            'kd_guru'             => $kd_guru,
            'nama_guru'      => $nama_guru,
            'alamat_guru'        => $alamat_guru,
            'no_hp'       => $no_hp,
            'email'       => $email
        );
        $this->db->where('kd_guru', $kd_guru);
        $this->db->update('tb_guru', $data);    
    }
    function mapel(){
        $query=$this->db->query("SELECT *FROM tb_mapel ORDER BY kd_mapel ASC");
        return $query->result();
    }
    function save_mapel(){
        $simpan_data=array(
            'kd_mapel'=>$this->input->post('kd_mapel'),
            'nama_mapel'=>$this->input->post('nama_mapel')
            );
        $simpan=$this->db->insert('tb_mapel',$simpan_data);
        return $simpan;
    }
    function delete_mapel($kd_mapel){
      $query=$this->db->query("DELETE FROM tb_mapel WHERE kd_mapel='$kd_mapel'");
    }
    function elerning(){
      $query=$this->db->query("SELECT *FROM elerning 
  
        ORDER BY id_elerning ASC");
      return $query->result();
    }
    function delete_elerning($id_elerning){
      $query=$this->db->query("DELETE FROM elerning WHERE id_elerning='$id_elerning'");
    }
}