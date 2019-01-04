<?php 

$servername = "localhost";
$username = "fatih";
$password = "123578951";
$dbname = "final";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sorgu=conn->prepare('DELETE FROM ders WHERE id=?');
$sorgu->execute([
	$_GET["id"]
]);

header('Location: listele.php');




 ?>