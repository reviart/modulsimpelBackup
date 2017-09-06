<?php
if(!empty($_FILES['file'])){
  $file = $_FILES['file'];

  $file_name  = $file['name'];
  $file_tmp   = $file['tmp_name'];
  $file_size  = $file['size'];
  $file_error = $file['error'];

  //extension file
  $file_ext   = explode('.', $file_name);
  $file_ext   = strtolower(end($file_ext));

  $allowed = array(
              'txt', 'doc', 'xls', 'xlsx', 'docx', 'pdf',
              'ppt', 'pptx',
              'jpg', 'jpeg', 'png', 'bmp', 'gif', 'tiff');

  if(in_array($file_ext, $allowed)){
    if($file_error === 0){
      $bingung  = move_uploaded_file($file_tmp,"moprog/$file_name");
      if ($bingung) {
        echo '<script type="text/javascript">';
        echo 'alert("Upload sukses!");';
        echo 'window.location.href = "form_upload.php";';
        echo '</script>';
      }
    }
  }
  else {
    echo '<script type="text/javascript">';
    echo 'alert("Ekstensi File Tidak Diperbolehkan atau belum memilih file!");';
    echo 'window.location.href = "form_upload.php";';
    echo '</script>';
  }
}
?>
