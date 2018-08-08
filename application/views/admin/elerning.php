<table class="table table-striped table-bordered table-hover">
	<thead>
		<th>No.</th>
		<th>Mapel</th>
		<th>Judul</th>
		<th>(Kode) Nama Guru</th>
		<th>Kelas</th>
		<th>ops</th>
	</thead>
	<tbody>
		<tr>
			<?php 
			$no=1;
			foreach($el as $row ){ 
			?>
			<td><?php echo $no++;?></td>
			<td><?php echo $row->nama_mapel;?></td>
			<td><?php echo $row->judul;?></td>
			<td><?php echo $row->kd_guru; ?>-<?php echo $row->nama_guru; ?></td>
			<td><?php echo $row->kd_kelas; ?></td>
			<td>
				<?=anchor('admin/c_master/delete_elerning/'.$row->id_elerning,'Hapus',['class'=>'btn-danger btn-sm','onclick'=>'return confirm(\'Hapus data ini..?\')']); ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>