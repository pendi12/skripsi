
<table table id="myTable" class="table table-bordered table-striped">
  <thead>
    <tr>
    	<th>No.</th>
    	<th>Kode Mata Kuliah</th>
      	<th>Nama Mata Kuliah</th>
      	<th>SKS</th>
      	<th>Semester</th>
    </tr>
  </thead>
  <tbody>
	<tr>
		<?php 
		$no=1;
		foreach ($data as $row) {
		?>
		<td><?php echo $no++; ?></td>
		<td><?php echo $row->id_mata_kuliah; ?></td>
		<td><?php echo $row->nama_mata_kuliah; ?></td>
		<td><?php echo $row->sks; ?></td>
		<td><?php echo $row->semester; ?></td>
		
	</tr>
		<?php } ?>
</tbody>
</table>

