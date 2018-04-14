
<?php
  class Model_users extends CI_Model {

    //mengambil tabel users
    public $table = 'user';

    public function cekAkun($username, $password)
    {
      //cari username lalu lakukan validasi
      $this->db->where('username', $username);
      $query = $this->db->get($this->table)->row();

      //jika bernilai 1 maka user tidak ditemukan
      if (!$query) return 1;

      //jika bernilai 2 maka user tidak aktif
      if ($query->active == 0) return 2;

      //jika bernilai 3 maka password salah
      $hash = $query->password;
      if (md5($password) != $hash) return 3;

      return $query;
    }
    function save_user(){
      $simpan_data=array(
        'username'=>$this->input->post('username'),
        'password'=>md5($this->input->post('password')),
        'level'   =>$this->input->post('level'),
        'nama'    =>$this->input->post('nama'),
        'active'  =>$this->input->post('active')
        );
      $simpan=$this->db->insert('user',$simpan_data);
      return $simpan;
    }
    function view_all_user(){
      $query=$this->db->query("SELECT *FROM user ORDER BY nama ASC");
      return $query->result();
    }
    function delete_user($id){
      $query=$this->db->query("DELETE FROM USER WHERE id='$id'");
    }
    function edit_user($id)
    {
        $q="SELECT * FROM  user WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
    }
 
    function simpan_edit_user($id, $nama, $username, $password, $level, $active)
    {
        $data = array(
            'id'             => $id,
            'nama'           => $nama,
            'username'       => $username,
            'password'       => $password,
            'level'          => $level,     
            'active'         => $active
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);    
    }
}