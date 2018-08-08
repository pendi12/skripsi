<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Learning | SMP Hajarmukti</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/vendors/animate.css/animate.min.css'); ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css'); ?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>  
      <div class="login_wrapper">
      <h2 align="center"></i> Website E-Learning SMP Hajarmukti</h2>
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?php echo base_url('auth/login'); ?>" role="login">
              <?php
              //menampilkan error menggunakan alert javascript
              if(isset($error)){ echo '<script> alert("'.$error.'"); </script>';}
              ?>
              <p align="center"><marquee>Selamat datang, silahkan masukan username dan password</marquee></p>
              <div>
                 <input class="form-control" placeholder="username" name="username" type="text" required autofocus>
              </div>
              <div>
                <input class="form-control" placeholder="Password" name="password" type="password" required >
              </div>
              <div align="left">
                <button type="submit" name="submit" value="login" class="btn btn-success">Login</button>
                <a class="reset_pass" href="#" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-hand-right"></i>  Kesulitan melakukan Login. .?</a>
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <!-- ---------------------------Modal---------------------------------------------------------------- -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
          <!-- heading modal -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Cara Melakukan Login</h4>
          </div>
          <!-- body modal -->
          <div class="modal-body">
            <p align="left">
              <b><i class="glyphicon glyphicon-hand-right"></i> Untuk Siswa</b>
              <br>~ masukan username dengan NIS masing-masing siswa
              <br>~ password menggunakan tanggal dan bulan lahir masing-masing (contoh:1208)
              <br><br>
              <b><i class="glyphicon glyphicon-hand-right"></i> Untuk Guru</b>
              <br>~ masukan username dengan kode guru dapat menggunakan email yang sudah di daftarkan ke admin(TU).
            </p>
          </div>
          <!-- footer modal -->
          <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
