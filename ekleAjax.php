<?php 
echo"fff2222";
include 'baglan.php';
 // include "ekle.php";
// include "footer.php";

$ders=$_REQUEST["ders"];
$baslik=$_REQUEST["baslik"];
$icerik=$_REQUEST["icerik"];

print_r($_REQUEST);
echo"<hr>";
if (isset($_REQUEST["submit"]) ) {

$ders = isset($_REQUEST["ders"]) ? $_REQUEST["ders"] : null;
$baslik = isset($_REQUEST["baslik"]) ? $_REQUEST["baslik"] : null;
$icerik = isset($_REQUEST["icerik"]) ? $_REQUEST["icerik"] : null;

} 

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














 ?>