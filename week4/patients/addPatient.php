 <?php
        
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
       if (isPostRequest()) {
           $fName = filter_input(INPUT_POST, 'fName');
           $lName = filter_input(INPUT_POST, 'lName');
           $dateofbirth = filter_input(INPUT_POST,'dateofBirth');
           $married = filter_input(INPUT_POST,'married');

           $result = addPatient ($fName,$lName,$dateofbirth,$married);
           
       }
    ?>
    

<html lang="en">
<head>
  <title>Add Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   

    
<div class="container">
    
  <h2>Add Patient</h2>
  <form class="form-horizontal" action="addPatient.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="team name">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fName" placeholder="Enter First Name" name="fName">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="lName">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date of Birth</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dateofBirth" placeholder="Ex: 1990-03-06" name="dateofBirth">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Married:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="married" placeholder="Enter 0 for No, 1 for Yes" name="married">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Patient</button>
        <?php
            if (isPostRequest()) {
                echo "Patient added";
            }
        ?>
      </div>
    </div>
  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./view.php">View Patients</a></div>
</div>

</body>
</html>