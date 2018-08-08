<div class="x_panel">
                  <div class="x_title">
                    <h2>Soal. <small>pastikan mengisi semua dengan baik, semua soal adalah esai</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form action="<?php echo site_url('guru/c_guru/save_elearning') ?>" method="POST" data-parsley-validate>
                       <label>Pilih Mata Pelajaran *:</label>
                          <select name="nama_mapel" class="form-control" required>
                           <?php foreach ($mapel as $row){ ?>
                            <option value="<?php echo $row->nama_mapel?>"><?php echo $row->nama_mapel?></option>
                           <?php } ?>
                          </select>
                          <label>Pilih Kelas *:</label>
                          <select name="kd_kelas" class="form-control" required>
                           <option value="1XA">1XA</option>
                           <option value="1XB">1XB</option>                            
                          </select>
                      <label>Judul * :</label>
                      <input type="text"  class="form-control" name="judul[]" placeholder="isi judul dari mapel, misalnya:'pertemuan 1' " required /> 
                      <label>Soal No 1 * :</label>
	                    <textarea required="required" class="form-control" name="soal[]"></textarea>
	                    <br/>
                      <label>Soal No 2 * :</label>
                      	<textarea required="required" class="form-control" name="soal[]"></textarea>
	                    <br/>
                      <label>Soal No 3 * :</label>
                      	<textarea required="required" class="form-control" name="soal[]"></textarea>
	                    <br/>                      
                      <label>Soal No 4 * :</label>
                      	<textarea required="required" class="form-control" name="soal[]"></textarea>
	                    <br/>
                      <label>Soal No 5 * :</label>
                      	<textarea required="required" class="form-control" name="soal[]"></textarea>
	                    <br/>
                      <label>Soal No 6 * :</label>
                      	<textarea required="required" class="form-control" name="soal[]"></textarea>
	                    <br/>
                      <label>Soal No 7 :</label>
                      	<textarea required="required" class="form-control" name="soal[]"></textarea>
	                    <br/>
                          <button class="btn btn-primary">Buat E-learning</button>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>