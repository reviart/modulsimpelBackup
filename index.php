<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modul | LAB.SIMPEL</title>

    <link href="bt/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bt/css/footer.css">
    <link rel="shortcut icon" href="img/simpel_fav.jpg">
  </head>
  <body>

    <section style="background-color:yellow;">
      <div class="jumbotron">
        <div class="container">
          <h1 style="color:white;" class="text-center">Modul Kuliah Laboratorium Simulasi Pemodelan</h1>
        </div>
        <br>
      </div>

      <div class="container">
        <div class="row text-center">
          <br>
          <div class="col-md-4">
            <div class="span4" style="margin-left: 30px;">
                <div class="centered service">
                    <a href="#tekan" data-toggle="modal">
                    <div class="circle-border">
                        <img class="img-circle img-rounded img-responsive" src="img/tekan.jpg" alt="tekan" width="150">
                    </div>
                    </a>
                    <h3>Teknik Animasi</h3>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="span4" style="margin-left: 30px;">
                <div class="centered service">
                    <a href="#jarkom" data-toggle="modal">
                    <div class="circle-border zoom-in">
                        <img class="img-circle img-rounded img-responsive" src="img/cisco1.png" alt="jarkom" width="150">
                    </div>
                    </a>
                    <h3>Jaringan Komputer</h3>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="span4" style="margin-left: 30px;">
                <div class="centered service">
                    <a href="#pv" data-toggle="modal">
                    <div class="circle-border zoom-in">
                        <img class="img-circle img-rounded img-responsive" src="img/pv.jpg" alt="pv" width="150">
                    </div>
                    </a>
                    <h3>Pemrograman Visual</h3>
                </div>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <br><br>
          <div class="col-md-4">
            <div class="span4" style="margin-left: 30px;">
                <div class="centered service">
                    <a href="#sbd" data-toggle="modal">
                    <div class="circle-border zoom-in">
                        <img class="img-circle img-rounded img-responsive" src="img/oracle.jpg" alt="sbd" width="150">
                    </div>
                    </a>
                    <h3>Sistem Basis Data</h3>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="span4" style="margin-left: 30px;">
                <div class="centered service">
                    <a href="#moprog" data-toggle="modal">
                    <div class="circle-border zoom-in">
                        <img class="img-circle img-rounded img-responsive" src="img/android.jpg" alt="moprog" width="150">
                    </div>
                    </a>
                    <h3>Mobile Programming</h3>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="span4" style="margin-left: 30px;">
                <div class="centered service">
                    <a href="#rpw" data-toggle="modal">
                    <div class="circle-border zoom-in">
                        <img class="img-circle img-rounded img-responsive" src="img/php.png" alt="rpw" width="150">
                    </div>
                    </a>
                    <h3>Rekayasa Perangkat Web</h3>
                </div>
            </div>
          </div>
        </div>

        <br><br>
      </div>

<!-- modal -->
  <!-- tekan -->
  <div class="modal fade" id="tekan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modul Teknik Animasi</h4>
        </div>
        <div class="modal-body">
          <?php
          echo "<p style='color:black;font-weight:bold;'>Klik Untuk Download!! :</p>";
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- tekan -->

  <!-- jarkom -->
  <div class="modal fade" id="jarkom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modul Jaringan Komputer</h4>
        </div>
        <div class="modal-body">
          <?php
          echo "<p style='color:black;font-weight:bold;'>Klik Untuk Download!! :</p>";
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- jarkom -->

  <!-- pv -->
  <div class="modal fade" id="pv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modul Pemrograman Visual</h4>
        </div>
        <div class="modal-body">
          <?php
          echo "<p style='color:black;font-weight:bold;'>Klik Untuk Download!! :</p>";
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- pv -->

  <!-- sbd -->
  <div class="modal fade" id="sbd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modul Sistem Basis Data</h4>
        </div>
        <div class="modal-body">
          <?php
          echo "<p style='color:black;font-weight:bold;'>Klik Untuk Download!! :</p>";
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- sbd -->


  <!-- rpw -->
  <div class="modal fade" id="rpw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modul Rekayasa Perangkat Web</h4>
        </div>
        <div class="modal-body">
          <?php
          echo "<p style='color:black;font-weight:bold;'>Klik Untuk Download!! :</p>";
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- rpw -->


<!-- modal tutup-->

      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="text-muted">&copy; 2016 Modelling and Simulation Laboratory</p>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </footer>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js -->
    <script type="text/javascript" src="jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="bt/js/bootstrap.min.js"></script>
  </body>
</html>
