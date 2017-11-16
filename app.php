<?php 
    include 'template_atas.html';

    function hitung_luas($alas,$tinggi) {
      $luas = ($alas * $tinggi) /2;

      return $luas;
    }
?>

  <h2 align="center">Aplikasi Menghitung Luas Segitiga</h2>
  <form class="form-horizontal" action="./app.php" method=post>
    <div class="form-group">
      <label class="control-label col-md-5" for="alas" align="right">Alas:</label>
      <div class="col-md-3">
        <input type="text" class="form-control" id="alas" placeholder="Masukkan panjang alas" name="alas">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-5" for="tinggi" align="right">Tinggi:</label>
      <div class="col-md-3">          
        <input type="text" class="form-control" id="tinggi" placeholder="Masukkan tinggi segitiga" name="tinggi">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-offset-5 col-md-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

<?php

  if (!empty($_POST)) {
    echo "<hr>";
    echo "<h2 align='center'>Luas Segitiga : ".hitung_luas($_POST['alas'],$_POST['alas'])."</h2>";
  }

    include 'template_bawah.html';
?>