<?php 
        $att = array('nis' => 'tb_siswa');
        echo form_open('admin/c_master/simpan_edit_siswa', $att);
        echo form_hidden('nis',$edit->nis);
    ?>
  <form class="col-md-6" >
  <label>Kode Guru</label>
      <input type="text" name="nis" class="form-control" disabled value="<?php echo $edit->nis; ?>" requred>
    <div class="form-group">
      <label>Nama Dosen</label>
      <input type="text" name="nama_siswa" class="form-control" value="<?php echo $edit->nama_siswa; ?>" requred>
    </div>
    <div class="form-group">
      <label>Kelas</label>
      <select class="form-control" name="kd_kelas">
        <option value="">-- pilih --</option>
        <option value="1XA">1XA</option>
        <option value="1XB">1XB</option>
      </select>
    </div>
    <div class="form-group">
      <label>Tgl. Lahir</label>
      <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $edit->tgl_lahir; ?>" required />
    </div>
    <div class="form-group">
      <label>Nama Ayah</label>
      <input type="text" name="nama_ayah" class="form-control" value="<?php echo $edit->nama_ayah; ?>" required />
    </div>
    <div class="form-group">
      <label>Nama Ibu</label>
      <input type="text" name="nama_ibu" class="form-control" value="<?php echo $edit->nama_ibu; ?>" required />
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control" value="<?php echo $edit->alamat; ?>" required />
    </div>
    <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="<?php echo base_url('admin/c_master/siswa'); ?>" class="btn btn-danger" >Batal</a>
  </form>