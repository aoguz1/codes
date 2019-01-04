<?php 

include 'header.php';
 ?>
<div class="formGrid listeleGrid">
  <form method="post">
      <div class="row">
          <div class="col-2"><label for="" Ders:=""></label></div>
          <div class="col-3"><input type="text" name="ders" placeholder="ders Giriniz..."></div>
      </div>

      <div class="row">
          <div class="col-2"><label for="" Baslik:=""></label></div>
          <div class="col-3"><input type="text" name="baslik" placeholder="Baslik Giriniz"></div>
      </div>
      <div class="row">
          <div class="col-2"><label for="İçerik:"></label></div>
          <div class="col-3"><textarea name="icerik" id="" cols="30" rows="10" placeholder="İçerik Giriniz..."></textarea></div>
      </div>
<div class="row">
    <div class="col"><input type="submit"></div>
</div>



  </form>  

</div>


<?php 
include 'baglan.php';
include "ekle.php";
 ?>












 <?php 

include "footer.php";
  ?>
