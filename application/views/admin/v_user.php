<div class="form-group">
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">tambah user</button>
</div>
<table id="myTable" class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
    	<th>No.</th>
      	<th>Nama</th>
      	<th>Username</th>
      	<th>Level</th>
      	<th>Status</th>
      	<th >Ops</th>
    </tr>
  </thead>
  <tbody>
	<tr>
		<?php 
		$no=1;
		foreach ($daftar_user as $row) {
		?>
		<td><?php echo $no++; ?></td>
		<td><?php echo $row->nama; ?></td>
		<td><?php echo $row->username; ?></td>
		<td><?php echo $row->level; ?></td>
		<td><?php 
      		if($row->active==='0'){
      			echo'Tidak aktif';
      		}else if($row->active==='1'){
		      	echo 'Aktif';
		    }else{
		      	echo'tidak ada';
		    } 
		    ?>
		</td>
		<td>
			<?=anchor('admin/c_admin/edit_user/'.$row->id,'Edit',['class'=>'btn btn-primary btn-sm']);?>
			<?=anchor('admin/c_admin/delete_user/'.$row->id,'Hapus',['class'=>'btn btn-danger btn-sm','onclick'=>'return confirm(\'anda yakin hapus data ini?\')']); ?>
		</td>
	</tr>
		<?php } ?>
</tbody>
</table>
<script type>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>


	
 
	<!-- ---------------------------Modal---------------------------------------------------------------- -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Form tambah data user</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<form action="save_user" method="post">
					  <div class="form-group">
					    <label>Nama</label>
					    <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
					  </div>
					  <div class="form-group">
					    <label>Username</label>
					    <input type="text" name="username" class="form-control" placeholder="Username" required>
					  </div>
					  <div class="form-group">
					    <label>Password</label>
					    <input type="password" name="password" class="form-control" placeholder="Password" required>
					    <input type="hidden" name="active" value="1"/>
					  </div>
					  <div class="form-group">
					  	<label>Level</label>
					  	<select class="form-control" name="level" required>
					  		<option value="">-- pilih --</option>
					  		<option value="mahasiswa">Mahasiswa</option>
					  		<option value="admin">Admin</option>
					  		<option value="dosen">Dosen</option>
					  	</select>
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