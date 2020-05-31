<?php
$dsn = "sqlsrv:Server=ict.neit.edu,5500;Database=SE266_Jacob";
$conn = new PDO($dsn, "SE266_Jacob", "Jacob");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$sql = "SELECT * FROM Table";

foreach ($conn->query($sql) as $row) {
    print_r($row);
} 
?>