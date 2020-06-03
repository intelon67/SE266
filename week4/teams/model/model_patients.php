<?php

    include (__DIR__ . '/db.php');

    
    function getPatients () {
        global $db;
        
        $results = [];
       
        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients ORDER BY patientLastName"); 

        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
    
    
    function addPatient ($fName,$lName,$bDate,$pMarried) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :patientFirstName, patientLastName = :patientLastName,patientBirthDate = :patientBirthDate, patientMarried = :patientMarried");

        $binds = array(
            ":patientFirstName" => $fName,
            ":patientLastName" => $lName,
            ":patientBirthDate" => $bDate,
            ":patientMarried" => $pMarried,
        );
        
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
   
   
    
    // $result = addTeam2 ('Feyenoord', 'Eredivisie');
    // echo $result;
   
    $patients = getPatients();
    $patient = $patients[1];
    var_dump($patient);

?>

