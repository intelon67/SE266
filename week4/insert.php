<?php
$username = "SE266_Jacob";
$password = "Jacob";
$database = "patients";
 
$mysqli = new mysqli("ict.neit.edu,5500", $username, $password, $database);
 
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
 
$fName = $mysqli->real_escape_string($_POST['fName']);
$lName = $mysqli->real_escape_string($_POST['lName']);
$married = $mysqli->real_escape_string($_POST['married']);
$birthdate = $mysqli->real_escape_string($_POST['birthdate']);
 
$query = "INSERT INTO teams (firstName,lastName, married, birthdate)
            VALUES ('{$fName}','{$lName}','{$married}','{$birthdate}')";
 
$mysqli->query($query);
$mysqli->close();