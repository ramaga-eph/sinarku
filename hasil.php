<?php
// Mengambil Data Dari halaman Perhitungan
$tempat = $_REQUEST["tempat"]; // nama Tempat
$ruang = $_REQUEST["ruang"]; // Nama Ruang
$e = $_REQUEST["e"]; // E (Intensitas Cahaya)
$l = $_REQUEST["l"]; // L (Luas)
$n = $_REQUEST["n"]; // Armatur
$lampu = $_REQUEST["lampu"]; //Lampu
$d = $_REQUEST["d"]; // Depresiasi
$uf = $_REQUEST["uf"]; // Faktor Pemanfaatan
$h = $_REQUEST["h"]; // Efisiensi

//Rumus Mencari Daya
$p = ($e * $l) / ($h * $n * $lampu * $d * $uf * 7);

//Jumlah Lampu
$jumlah_lampu = ($n * $lampu);

//Pembulatan Sesuai koma
$hasil = round($p);

//Pembulatan Sesuai Pasaran
if( $hasil == 16){
 $hasil == 15;
}else if ($hasil == 17){
  $hasil == 18;
}else if ($hasil == 21 || $hasil == 22){
  $hasil == 20;
}else if ($hasil == 23){
  $hasil == 24;
}else if ($hasil == 25 || $hasil == 26){
  echo $hasil == 24;
}else if ($hasil == 27){
  $hasil == 28;
}else if ($hasil == 29){
  $hasil == 30;
}else if ($hasil < 35 && $hasil > 30){
  $hasil == 30;
}else if ($hasil < 45 && $hasil > 34){
  $hasil == 40;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="google-site-verification" content="8NfJSFZJUaRqawBDrRa1prlbjtdLarKkIYSsNpbrt3M" />
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>SinarKu</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
  <link rel="stylesheet" href="css/costum.css">
</head>

<body style="background-color: #FBEF0F;">
  <!-- Image and text -->

  <nav class="navbar navbar-light bg-yellowflow text-center justify-content-center mb-5 pt-3">

    <a class="navbar-brand" width="100%" href="index.html">
      <img src="img/logo.png" width="50" height="50" class="d-block mx-auto mb-4"
        alt="">
        <h2>SinarKu</h2>
    </a>
  </nav>
  <div class="container" style="padding-bottom: 200px;">

    <div class="row">
      <div class="col order-md-1 text-center">
        <h4 class="mb-3">Hasil</h4>

        <p>Hasil Perhitungan untuk <b><?php echo $tempat; ?></b> pada <b><?php echo $ruang; ?></b> diberikan lampu LED
          dengan daya <b><?php echo $hasil; ?> watt  </b> sebanyak <b><?php echo $jumlah_lampu; ?></b>  lampu
          <?php if($hasil > 45){ ?>
            <br>
            ( Mohon jenis lampu disesuaikan dengan lampu yang umum digunakan/pasarkan untuk <?php echo $tempat; ?> )
            <?php } ?>
        </p>
        <hr class="mb-4">
        <a href="index.html" class="btn btn-primary btn-lg btn-block ml-2 mr-2" >Kembali</a>
      </div>

    </div>
  </div>

  <footer class="mt-5 py-5 pt-5 text-muted text-center text-small ">
      <div class="bg-yellowflow">
        <img src="img/image 2.png" alt="" srcset="">
        <p class="mb-1">&copy; Ramaga Putra</p>
      </div>
    </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <script type='text/javascript'>
    $(document).ready(function() {
      $('#lebar').keyup(function() {
        var panjang = $("#panjang").val();
        var lebar = $('#lebar').val();
        var luas = panjang * lebar;
        $('#luas').val(luas);
      });
    });
  </script>
</body>

</html>