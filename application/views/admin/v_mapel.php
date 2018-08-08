
<div class="form-group">
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">add</button>
</div>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<th>No.</th>
		<th>Kode Mata Pelajaran</th>
		<th>Nama Mata Pelajaran</th>
		<th>ops</th>
	</thead>
	<tbody>
		<tr>
			<?php 
			$no=1;
			foreach($mapel as $row ){ 
			?>
			<td><?php echo $no++;?></td>
			<td><?php echo $row->kd_mapel;?></td>
			<td><?php echo $row->nama_mapel; ?></td>
			<td>
				<?=anchor('admin/c_master/delete_guru/'.$row->kd_mapel,'Hapus',['class'=>'btn-danger btn-sm','onclick'=>'return confirm(\'Hapus data ini..?\')']); ?>
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
					<h4 class="modal-title">Form Tambah Mata Pelajaran</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<form action="save_mapel" method="post">
					  <div class="form-group">
					    <label>Kode Mata Pelajaran</label>
					    <input type="text" name="kd_mapel" class="form-control" placeholder="kode mapel" required>
					  </div>
					  <div class="form-group">
					    <label>Nama Mata Pelajaran</label>
					    <input type="text" name="nama_mapel" class="form-control" placeholder="nama mapel " required>
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