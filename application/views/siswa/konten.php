<div class="container">
  
    <?php foreach($elerning as $row){ ?>
    <div class="tile-stats">
    	<p><?php echo $row->judul;?> -
    	<?php echo $row->nama_guru; ?> <a href="" class="btn btn-primary btn-sm"> Lihat</a></p>
    </div>
    <?php } ?>
  
</div>