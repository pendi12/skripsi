
<div class="form-group">
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">add</button>
</div>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<th>No.</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Tgl. Lahir</th>
		<th>Nama Ayah</th>
		<th>Nama Ibu</th>
		<th>Alamat</th>
		<th>ops</th>
	</thead>
	<tbody>
		<tr>
			<?php 
			$no=1;
			foreach($siswa as $row ){ 
			?>
			<td><?php echo $no++;?></td>
			<td><?php echo $row->nis;?></td>
			<td><?php echo $row->nama_siswa; ?></td>
			<td><?php echo $row->kd_kelas; ?></td>
			<td><?php echo $row->tgl_lahir; ?></td>
			<td><?php echo $row->nama_ayah; ?></td>
			<td><?php echo $row->nama_ibu; ?></td>
			<td><?php echo $row->alamat; ?></td>
			
			<td>
				<?=anchor('admin/c_master/edit_siswa/'.$row->nis,'Edit',['class'=>'btn btn-primary btn-sm']);?>
				<?=anchor('admin/c_master/delete_siswa/'.$row->nis,'Hapus',['class'=>'btn-danger btn-sm','onclick'=>'return confirm(\'Hapus data ini..?\')']); ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<!-- ---------------------------Modal---------------------------------------------------------------- -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Form Tambah Data Murid</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<form action="save_siswa" method="post">
					  <div class="form-group">
					    <label>NIS</label>
					    <input type="text" name="nis" class="form-control" placeholder="NIS" required>
					  </div>
					  <div class="form-group">
					    <label>Nama Siswa</label>
					    <input type="text" name="nama_siswa" class="form-control" placeholder="nama lengkap " required>
					  </div>
					  <div class="form-group">
					    <label>Kelas</label>
						<select class="form-control" name="kd_kelas" required>
					        <option value="">-- pilih --</option>
					        <option value="1XA">1XA</option>
					        <option value="1XB">1XB</option>
				      	</select>
					  </div>
					  <div class="form-group">
					    <label>Tgl. Lahir</label>
					    <input type="text" name="tgl_lahir" class="form-control" placeholder="contoh 12-08-1-2000" required>
					  </div>
					  <div class="form-group">
					  	<label>Nama Ayah</label>
					  	<input type="text" name="nama_ayah" class="form-control" placeholder="nama ayah" required>
					  </div>
					  <div class="form-group">
					  	<label>Nama Ibu</label>
					  	<input type="text" name="nama_ibu" class="form-control" placeholder="nama ibu" required>
					  </div>
					  <div class="form-group">
					  	<label>Alamat</label>
					  	<textarea name="alamat" class="form-control" required></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
					  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					</form>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					
				</div>
			</div>
		</div>
	</div>