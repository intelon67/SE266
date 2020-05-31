<?php
$servername = "ict.neit.edu,5500";
$username = "se266_Jacob";
$password = "Jacob";

try {
  $conn = new PDO("mysql:host=$servername;dbname=patients", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>