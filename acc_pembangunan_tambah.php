<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form" action="acc_pembangunan_tambah_proses.php" method="post">
                        <div class="card-body">
						
						  <div class="form-group">
                            <label for="nama_bidang">Program</label>
                            <select class="form-control" id="" name="nama_bidang" required="">
                              <option value="">--Pilih--</option>
                              <option value="Bidang Fisik Dan Prasarana">Bidang Fisik Dan Prasarana</option>
                              <option value="Bidang Agama Dan Bidang Budaya">Bidang Agama Dan Bidang Budaya</option>
                            </select>
                          </div>

						 
                          <div class="form-group">
                            <label for="nama_kegiatan">Prioritas Kegiatan</label>
                            <input type="text" class="form-control" id="" name="nama_kegiatan" placeholder="Masukan Nama Kegiatan..." required="">
                          </div>
						  
						  <div class="form-group">
                            <label for="sasaran_kegiatan">Sasaran Kegiatan</label>
                            <input type="text" class="form-control" id="" name="sasaran_kegiatan" placeholder="Masukan Sasaran Kegiatan..." required="">
                          </div>

                          <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <textarea class="form-control" id="" name="lokasi" placeholder="Masukan Lokasi..." required=""></textarea>
                            
                          </div>

                          <div class="form-group">
                            <label for="volume">Volume</label>
                            <input type="text" class="form-control" id="" name="volume" placeholder="Masukan Volume/Luas Pembangunan..." required="">
                          </div>
						  
                          <div class="form-group">
                            <label for="pagu">Pagu</label>
                            <input type="text" class="form-control" id="" name="pagu" placeholder="Masukan Pagu ..." required="">
                          </div>
						  
						  <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <input type="text" class="form-control" id="" name="ket" placeholder="Masukan Keterangan ..." required="">
                          </div>
						  
						  <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="" name="status" required="">
                              <option value="">--Pilih--</option>
                              <option value="Selesai Dilaksanakan">Selesai Dilaksanakan</option>
                              <option value="Belum Dilaksanakan">Belum Dilaksanakan</option>
							  <option value="Tertunda">Tertunda</option>
                            </select>
                          </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                          <button type="reset" name="reset" class="btn btn-danger">Batal</button>
                          <button type="button" name="kembali" class="btn btn-warning" onclick="history.back(-1)">Kembali</button>

                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

          </section>
          <!-- /.Left col -->

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include 'footer.php'; ?>
