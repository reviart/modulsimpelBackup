<?php
session_start();

$user_check = $_SESSION['username'];

if(!isset($_SESSION['username'])){
   header("location:key_login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="bt/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/simpel_fav.jpg">
    <title>Form upload | LAB.SIMPEL</title>
  </head>
  <body>
    <br><br>
      <div class="container">
        <div class="row text-center">
          <br>
          <!-- Tekan -->
          <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading"><h3>Teknik animasi</h3></div>
              <div class="panel-body">
                <?php
                $folder="./tekan/";
                if (!($buka_folder=opendir($folder))) {
                    die("erorr tidak bisa di buka");
                }
                $file_array=array();
                while ($baca_folder=readdir($buka_folder)) {
                  if (substr($baca_folder, 0,1)!='.') {
                    $file_array[]=$baca_folder;
                    }
                }
                while (list($index,$nama_file)=each($file_array)) {
                    $nomor=$index+1;
                   echo "$nomor. <a href='./tekan/$nama_file' download>$nama_file</a> <br/>";
                }
                closedir($buka_folder);
                ?>
              </div>
              <div class="panel-footer">
                <form class="" action="tekan.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="file">
                  <input type="submit" name="" value="upload" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <!-- Tutup tekan -->
          <!-- Jarkom -->
          <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading"><h3>Jaringan komputer</h3></div>
              <div class="panel-body">
                <?php
                $folder="./jarkom/";
                if (!($buka_folder=opendir($folder))) {
                    die("erorr tidak bisa di buka");
                }
                $file_array=array();
                while ($baca_folder=readdir($buka_folder)) {
                  if (substr($baca_folder, 0,1)!='.') {
                    $file_array[]=$baca_folder;
                    }
                }
                while (list($index,$nama_file)=each($file_array)) {
                    $nomor=$index+1;
                   echo "$nomor. <a href='./jarkom/$nama_file' download>$nama_file</a> <br/>";
                }
                closedir($buka_folder);
                ?>
              </div>
              <div class="panel-footer">
                <form class="" action="jarkom.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="file">
                  <input type="submit" name="" value="upload" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <!-- Tutup jarkom -->
          <!-- Pv -->
          <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading"><h3>Pemrograman visual</h3></div>
              <div class="panel-body">
                <?php
                $folder="./pv/";
                if (!($buka_folder=opendir($folder))) {
                    die("erorr tidak bisa di buka");
                }
                $file_array=array();
                while ($baca_folder=readdir($buka_folder)) {
                  if (substr($baca_folder, 0,1)!='.') {
                    $file_array[]=$baca_folder;
                    }
                }
                while (list($index,$nama_file)=each($file_array)) {
                    $nomor=$index+1;
                   echo "$nomor. <a href='./pv/$nama_file' download>$nama_file</a> <br/>";
                }
                closedir($buka_folder);
                ?>
              </div>
              <div class="panel-footer">
                <form class="" action="pv.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="file">
                  <input type="submit" name="" value="upload" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <!-- Tutup pv -->
        </div>

        <div class="row text-center">
          <br><br>
          <!-- Sbd -->
          <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading"><h3>Sistem basis data</h3></div>
              <div class="panel-body">
                <?php
                $folder="./sbd/";
                if (!($buka_folder=opendir($folder))) {
                    die("erorr tidak bisa di buka");
                }
                $file_array=array();
                while ($baca_folder=readdir($buka_folder)) {
                  if (substr($baca_folder, 0,1)!='.') {
                    $file_array[]=$baca_folder;
                    }
                }
                while (list($index,$nama_file)=each($file_array)) {
                    $nomor=$index+1;
                   echo "$nomor. <a href='./sbd/$nama_file' download>$nama_file</a> <br/>";
                }
                closedir($buka_folder);
                ?>
              </div>
              <div class="panel-footer">
                <form class="" action="sbd.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="file">
                  <input type="submit" name="" value="upload" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <!-- Tutup sbd -->
          <!-- Moprog -->
          <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading"><h3>Mobile programming</h3></div>
              <div class="panel-body">
                <?php
                $folder="./moprog/";
                if (!($buka_folder=opendir($folder))) {
                    die("erorr tidak bisa di buka");
                }
                $file_array=array();
                while ($baca_folder=readdir($buka_folder)) {
                  if (substr($baca_folder, 0,1)!='.') {
                    $file_array[]=$baca_folder;
                    }
                }
                while (list($index,$nama_file)=each($file_array)) {
                    $nomor=$index+1;
                   echo "$nomor. <a href='./moprog/$nama_file' download>$nama_file</a> <br/>";
                }
                closedir($buka_folder);
                ?>
              </div>
              <div class="panel-footer">
                <form class="" action="moprog.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="file">
                  <input type="submit" name="" value="upload" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <!-- Tutup moprog -->
          <!-- Rpw -->
          <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading"><h3>Rekayasa perangkat web</h3></div>
              <div class="panel-body">
                <?php
                $folder="./rpw/";
                if (!($buka_folder=opendir($folder))) {
                    die("erorr tidak bisa di buka");
                }
                $file_array=array();
                while ($baca_folder=readdir($buka_folder)) {
                  if (substr($baca_folder, 0,1)!='.') {
                    $file_array[]=$baca_folder;
                    }
                }
                while (list($index,$nama_file)=each($file_array)) {
                    $nomor=$index+1;
                   echo "$nomor. <a href='./rpw/$nama_file' download>$nama_file</a> <br/>";
                }
                closedir($buka_folder);
                ?>
              </div>
              <div class="panel-footer">
                <form class="" action="rpw.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="file">
                  <input type="submit" name="" value="upload" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <!-- Tutup rpw -->
        </div>
        Click here to <a href="logout.php" tite="Logout">Logout.
        <br><br>
      </div>
  </body>
</html>
