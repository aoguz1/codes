<?php 
include 'header.php';
 ?>

<div class="contentGrid ">
 <div class="container">
<form class="yazForm" method="post">
<div class="row">
<div class="col-md-6 col-12">
   <div class="input-field"> 
    <input type="text" id="ders" name="ders" required >
    <label for="ders">Ders:</label>
  </div>
</div>
<div class="col-md-6 col-12">
 <div class="input-field"> 
    <input type="text" id="baslik" name="baslik" required >
    <label for="baslik">Baslik:</label>
  </div>
</div>


<div class="col-md-12 col-12 mt-3">
	
	<textarea class="my-0" name="icerik" id="icerik" cols="30" rows="10" placeholder="İçerik Ekleyin" required=""></textarea>
    
  </div>
  <div class="col-md-3 mt-3 mx-auto col-6">
  	<div class="inputSubmit">
    <input type="submit"  value="Gönder">
  </div>

  

</div>

</form>
 </div>

</div>

<?php 
 include 'baglan.php';
 include "ekle.php";
include "footer.php";
  ?>
