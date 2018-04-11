<html>
  <head>
    <title>mahasiswa</title>
  </head>
  <body>
      <center>
        <h2>mahasiswa</h2>
        <h3> Username Anda Adalah <?php echo $this->session->userdata('username'); ?></h3><br /><br />
        <a href="<?php echo site_url('auth/logout'); ?>">Keluar</a>
      </center>
    </form>
  </body>
</html>
