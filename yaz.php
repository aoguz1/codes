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
$ders=$_POST["ders"];
$baslik=$_POST["baslik"];
$icerik=$_POST["icerik"];


 ?>

  <?php
$servername = "localhost";
$username = "fatih";
$password = "123578951";
$dbname = "final";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($ders,$baslik,$icerik)) {
    
$sql = "INSERT INTO ders (ders,baslik,icerik)
    VALUES ('$ders', '$baslik','$icerik')";
} 

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 




 <?php 

include "footer.php"
  ?>
