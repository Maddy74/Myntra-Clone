<?php
$b1 = "FACES CANADA";
$price="519";
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "beauty";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into bs2(b1,price)values(?,?)");
    $stmt->bind_param("ss",$b1,$price);
    $execval = $stmt->execute();
    echo $execval;
}

  header("location:bill2.html");

$conn->close();
?>