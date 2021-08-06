<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Prioritas Pembangunan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <form method="POST" action="">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Left col -->
          
          <section class="col-lg-12 connectedSortable">

            <!-- DIRECT CHAT -->
            <div class="card">
              <div class="card-header">
                <a href="acc_pembangunan_tambah.php"><button class="btn btn-md btn-primary">Tambah</button></a>
                <a href="cetak_acc_pembangunan.php?status=<?php echo $_POST['status']?>" target="_blank" class="btn btn-primary"><i class="icon fa fa-print"></i> Cetak Semua</a>
              </div>
              <!--Buat Kategori-->
              <!-- /.card-header -->
              <div class="card-body table-responsive">
              <div class="form-group">
		            <select name="status" id="status" class="form-control">
		                <option value="">--Pilih Status--</option>
		                <option value="Selesai Dilaksanakan"> Selesai Dilaksanakan</option>
		                <option value="Belum Dilaksanakan">Belum Dilaksanakan</option>
						        <option value="Tertunda">Tertunda</option>
		            </select>
    </form>
					<br>
          <button id="submit" name="submit" class="btn btn-warning">Tampilkan</button>
		        </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr style="text-align: center;">
                    <th>No</th>
                    <th>Program</th>
                    <th>Kegiataan Prioritas</th>
                    <th>Sasaran Kegiataan</th>
                    <th>Lokasi (RT/RW)</th>
                    <th>Volume</th>
                    <th>Pagu</th>
                    <th>Keterangan</th>
					          <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
        <?php
        $data = mysqli_query($conn,"SELECT * FROM acc_pembangunan ORDER BY status DESC");
				if(isset($_POST['submit'])){
						if($_POST['status']=='Selesai Dilaksanakan'){
							$data = mysqli_query($conn,"SELECT * FROM `acc_pembangunan` WHERE `status` = 'Selesai Dilaksanakan'");	
						} elseif($_POST['status']== 'Belum Dilaksanakan'){
							$data = mysqli_query($conn,"SELECT * FROM `acc_pembangunan` WHERE `status` = 'Belum Dilaksanakan'");	
						} elseif($_POST['status']== 'Tertunda') {
							$data = mysqli_query($conn,"SELECT * FROM `acc_pembangunan` WHERE `status` = 'Tertunda'");
						} 				
					}
          $no=1;
          while($dataa = mysqli_fetch_array($data)) {
          ?>
                    <tr>  
                      <td><?php echo $no++;?></td>
                      <td><?php echo$dataa['nama_bidang'];?></td>
                      <td><?php echo $dataa['nama_kegiatan'];?></td>
					            <td><?php echo $dataa['sasaran_kegiatan'];?></td>
                      <td><?php echo $dataa['lokasi'];?></td> 
                      <td><?php echo $dataa['volume'];?></td>
                      <td><?php echo $dataa['pagu'];?></td>
                      <td><?php echo $dataa['ket'];?></td>
					            <td><?php echo $dataa['status'];?></td>
                      <td>
                        <a class='btn btn-success btn-sm' href="acc_pembangunan_edit.php?id=<?php echo $dataa['id_pembangunan'];?>"><i class='fa fa-pencil-alt'></a></i>
                        <a class="btn btn-danger btn-sm"  onclick="return confirm('Hapus Data?')" href="acc_pembangunan_hapus.php?id=<?php echo $dataa['id_pembangunan'];?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>

              </div>
              <!-- /.card-body -->

              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

          </section>
          <!-- /.Left col -->

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include 'footer.php'; ?>
