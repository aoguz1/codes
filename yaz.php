<?php 

include 'header.php';
 ?>






















<?php 
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

 ?>

  <?php
$servername = "localhost";
$username = "fatih";
$password = "123578951";
$dbname = "veriler";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO data (name,email,subject,message)
    VALUES ('$name', '$email','$subject','$message')";
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


$servername = "localhost";
$username = "fatih";
$password = "123578951";
$dbname = "veriler";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,email,subject,message FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 



 <?php 

include "footer.php"
  ?>
