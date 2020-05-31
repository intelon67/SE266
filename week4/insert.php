<?php
$username = "SE266_Jacob";
$password = "Jacob";
$database = "patients";
 
$mysqli = new mysqli("ict.neit.edu,5500", $username, $password, $database);
 
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
 
$field1 = $mysqli->real_escape_string($_POST['fName']);
$field2 = $mysqli->real_escape_string($_POST['lName']);
$field3 = $mysqli->real_escape_string($_POST['married']);
$field4 = $mysqli->real_escape_string($_POST['birthdate']);
 
$query = "INSERT INTO teams (firstName,lastName, married, birthdate)
            VALUES ('{$fName}','{$lName}','{$married}','{$birthdate}')";
 
$mysqli->query($query);
$mysqli->close();