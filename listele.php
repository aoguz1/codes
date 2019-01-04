<?php include 'header.php'; ?>
<div class="listeleGrid"><div class="d-flex flex-wrap"> 

<?php 
include 'baglan.php';
$sql = "SELECT ders,baslik,icerik FROM ders";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {   ?>

<div class="col-md-4  col-sm-12">
<div class="card border-grey mb-3 shadow p-3 mb-5 bg-white rounded" >
  <div class="card-header bg-transparent border-success text-center text-uppercase"><b><?php echo$row["ders"]; ?></b></div>
  
  <div class="card-body text-success icerikGrid">
    <h5 class="card-title text-capitalize text-left">><?php echo$row["baslik"]; ?></h5>
    <p class="card-text "><?php echo$row["icerik"]; ?></p>
  </div>
</div>
</div>

<?php }
} else {
    echo "veri girilmedi";
}

include "footer.php";
?> 
</div></div>



 