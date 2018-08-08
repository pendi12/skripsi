<?php 

class M_siswa extends CI_Model{
	
	function elearning(){
	$query=$this->db->query("SELECT *FROM elerning 
        left join tb_guru on tb_guru.kd_guru=elerning.kd_guru ORDER BY id_elerning ASC");
    return $query->result();
	}
}