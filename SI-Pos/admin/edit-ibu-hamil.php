<?php require_once('head.php');

if(isset($_GET['kode'])){
  $kd = $_GET['kode'];
  $sql = mysqli_query($con, "SELECT * from ibu where kode_ibu='$kd'");
  $data = mysqli_fetch_array($sql);
  $nik = $data['nik'];
}

if(isset($_POST['tambah'])){
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $suami = $_POST['suami'];
  $alamat = $_POST['alamat'];
  $usia = $_POST['usia'];

    $addibu = mysqli_query($con,"UPDATE ibu set
    nik = '$nik',
    nama = '$nama',
    suami = '$suami',
    alamat = '$alamat',
    usia = '$usia'");

    if($addibu){
      header('location:ibu-hamil.php?stat=update_success');
    }else{
      header('location:ibu-hamil.php?stat=update_failed');
    }
  
}
?>
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">IBU HAMIL</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Ubah Pendaftaran Ibu Hamil</h3>
                        <div class="row">
                          <?php require_once('alert.php'); ?>
                            <div class="col-sm-6">
                              <h4 style="text-align: center;">Data Ibu Hamil</h4>
                              <form method="post">
                                  <div class="sm-3">
                                      <label for="exampleInputEmail1" class="form-label">NIK</label>
                                      <input type="text" readonly value="<?= $data2['nik'] ?>" name="nik" class="form-control" id="" aria-describedby="emailHelp">
                                  </div><br>
                                  <div class="sm-3">
                                      <label for="exampleInputPassword1" class="form-label">Nama</label>
                                      <input type="text" value="<?= $data2['nama'] ?>" name="nama" class="form-control" id="">
                                  </div><br>
                                  <div class="sm-3">
                                      <label for="exampleInputPassword1" class="form-label">Nama Suami</label>
                                      <input type="text" value="<?= $data2['suami'] ?>" name="suami" class="form-control" id="">
                                  </div><br>
                                  <div class="sm-3">
                                      <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                      <textarea class="form-control" name="alamat" aria-label="With textarea"><?= $data2['alamat'] ?></textarea>
                                  </div><br>
                                  <div class="sm-3">
                                      <label for="exampleInputPassword1" class="form-label">Usia</label>
                                      <input type="text" value="<?= $data2['usia'] ?>" name="usia" class="form-control" id="">
                                  </div><br>                            
                          </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
<?php require_once('footer.php'); ?>