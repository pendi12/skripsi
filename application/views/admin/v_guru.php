
<div class="form-group">
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">add</button>
</div>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<th>No.</th>
		<th>Kode Guru</th>
		<th>Nama Guru</th>
		<th>Alamat</th>
		<th>E-Mail</th>
		<th>No Telp</th>
		<th>ops</th>
	</thead>
	<tbody>
		<tr>
			<?php 
			$no=1;
			foreach($guru as $row ){ 
			?>
			<td><?php echo $no++;?></td>
			<td><?php echo $row->kd_guru;?></td>
			<td><?php echo $row->nama_guru; ?></td>
			<td><?php echo $row->alamat_guru; ?></td>
			<td><?php echo $row->no_hp; ?></td>
			<td><?php echo $row->email; ?></td>
			<td>
				<?=anchor('admin/c_master/edit_guru/'.$row->kd_guru,'Edit',['class'=>'btn btn-primary btn-sm']);?>
				<?=anchor('admin/c_master/delete_guru/'.$row->kd_guru,'Hapus',['class'=>'btn-danger btn-sm','onclick'=>'return confirm(\'Hapus data ini..?\')']); ?>
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
					<h4 class="modal-title">Form Tambah Data Guru</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<form action="save_guru" method="post">
					  <div class="form-group">
					    <label>Kode Guru</label>
					    <input type="text" name="kd_guru" class="form-control" placeholder="kode" required>
					  </div>
					  <div class="form-group">
					    <label>Nama Guru</label>
					    <input type="text" name="nama_guru" class="form-control" placeholder="nama lengkap " required>
					  </div>
					  <div class="form-group">
					  	<label>Alamat</label>
					  	<textarea name="alamat_guru" class="form-control" required></textarea>
					  </div>
					  <div class="form-group">
					    <label>No Hp</label>
					    <input type="number" name="no_hp" class="form-control" placeholder="no hp/ tlp" required>
					  </div>
					   <div class="form-group">
					    <label>E-Mail</label>
					    <input type="email" name="email" class="form-control" placeholder="alamat email" required>
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