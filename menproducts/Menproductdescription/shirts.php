<?php
$s1 = "Levis";
$price="999";
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "shirts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into ts1(s1,price)values(?,?)");
    $stmt->bind_param("ss",$s1,$price);
    $execval = $stmt->execute();
    echo $execval;
}

  header("location:bill.html");

$conn->close();
?>