<?php 
        $att = array('username' => 'user');
        echo form_open('admin/c_admin/simpan_edit_user', $att);
        echo form_hidden('username',$edit->username);
    ?>
  <form class="col-md-6" >
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control" disabled value="<?php echo $edit->username; ?>" >
    </div>
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" value="<?php echo $edit->nama; ?>" >
    </div>
    <div class="form-group">
      <label>Password(wajib diisi ketika edit)</label>
      <input type="password" name="password" class="form-control" placeholder="password tidak boleh kosong" required />
    </div>
    <div class="form-group">
      <label>Status</label>
      <select class="form-control" name="active" value="<?php echo $edit->active; ?>"
        <option value="">-- pilih --</option>
        <option value="1">Aktif</option>
        <option value="0">Tidak Aktif</option>
      </select>
    </div>
    <div class="form-group">
    	<label>Level</label>
    	<select class="form-control" name="level" value="<?php echo $edit->level; ?>"
    		<option value="">-- pilih --</option>
    		<option value="siswa">Siswa</option>
    		<option value="guru">Guru</option>
    		<option value="admin">Admin</option>
    	</select>
    </div>
    <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="<?php echo base_url('admin/c_admin/view_user'); ?>" class="btn btn-danger" >Batal</a>
  </form>