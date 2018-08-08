<?php 
        $att = array('kd_guru' => 'tb_guru');
        echo form_open('admin/c_master/simpan_edit_guru', $att);
        echo form_hidden('kd_guru',$edit->kd_guru);
    ?>
  <form class="col-md-6" >
  <div class="form-group">
      <label>Kode Guru</label>
      <input type="text" name="kd_guru" class="form-control" disabled value="<?php echo $edit->kd_guru; ?>" requred>
    </div>
    <div class="form-group">
      <label>Nama Guru</label>
      <input type="text" name="nama_guru" class="form-control" value="<?php echo $edit->nama_guru; ?>" requred>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat_guru" class="form-control" value="<?php echo $edit->alamat_guru; ?>" required />
    </div>
    <div class="form-group">
      <label>Ho Hp</label>
      <input type="number" name="no_hp" class="form-control" value="<?php echo $edit->no_hp; ?>" required />
    </div>
    <div class="form-group">
      <label>E-Mail</label>
      <input type="email" name="email" class="form-control" value="<?php echo $edit->email; ?>" required />
    </div>
    <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="<?php echo base_url('admin/c_master/siswa'); ?>" class="btn btn-danger" >Batal</a>
  </form>