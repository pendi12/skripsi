<?php 

class M_guru extends CI_Model{
	
	function view_mapel(){
	$query=$this->db->query("SELECT *FROM tb_mapel ORDER BY kd_mapel ASC");
    return $query->result();
	}
	function view_kelas(){
	$query=$this->db->query("SELECT *FROM tb_siswa ORDER BY kd_kelas ASC");
    return $query->result();
	}
	function save_elearning(){
		
		$data=array(
			'nama_mapel'=>$nama_mapel,
			'kd_guru'=>$kd_guru,
			'kd_kelas'=>$kd_kelas,
			'judul'=>$judul,
			'soal'=>$soal
			);

		$simpan=$this->db->insert('elerning',$data);
		
	}
}