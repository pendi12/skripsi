<!DOCTYPE html>
<html>
<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
<head>
	<title>404 | Error</title>
</head>
<body>
<div class="container">
  <div class="row"  style="padding-top:1%;" align="center" >
      <div class="well center">
          <h1><font face="Tahoma" color="red">404 | Page Not Found</font></small></h1>
          <br />
          <p>Mohon Maaf halaman yang anda cari tidak ditemukan.</p>
          <p><b>Silahkan kembali, atau tekan tombol Home dibawah ini</b></p>
          <a href="<?php echo base_url();?>" class="btn btn-large btn-info"><span class="glyphicon glyphicon-home"></span> Back to Home</a>
          <hr><p align="center">&copy: <?php $t=getdate(); echo $t['year']; ?> SMP Hajarmukti</p>
        </div>
        
        <br />


  </div>
</div> 


</body>
</html>