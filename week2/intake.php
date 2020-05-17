<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SE 266 - Week 2</title>
    </head>
    <style>
    body {background-image:url('bg.jpg')}

    .header {margin:auto;
            width:600px;
            height:40px;
            background-color:black;}


    footer {border-top-style:solid 1px;
            margin:auto;
            width:600px;
            height:20px;
            background-color:black;}
            
    .main {background-color:gray;
            border-style:solid 2px;
            margin:auto;
            width:600px;
            height:1000px;}
</style>

<?php 
  function age ($bdate) {

    $date = new DateTime($bdate);

    $now = new DateTime();

    $interval = $now->diff($date);



    return $interval->y;

}

function isDate($dt) {

    try {

        $d = new DateTime($dt);

        return (true);

    } catch(Exception $e) {

        return false;

    }

}

function bmi ($ft, $inch, $weight) {

    $kg = $weight/2.20462;
    $ftInches = $ft/12;
    $meters = $ftInches + $inch * 0.0254;

    $BMI = $kg / ($meters * $meters);

    return $BMI;
  }


  function isEmpty($var){

    $var = trim($var);

      if(isset($var) == true && $var == ''){
          return true;
      }
      else{
          return false;
      }
  }
  function bmiDescription ($BMI) {

    if ($BMI >= 30){
        $BmiDesc = 'Obese';
    }
    else if($BMI >= 25){
        $BmiDesc = 'Overweight';
    }
    else if ($BMI >= 18.5){
        $BmiDesc = 'Normal Weight';
    }
    else if ($BMI < 18.5){
        $BmiDesc = 'Underweight';
    }
    
    return $bmiDescription;
}
    if (isset($_POST['subBtn'])){
        echo "Form Submitted <hr />";
        isDate($_POST['birthDate']);
        age($_POST['birthDate']);
        isEmpty($_POST['fname']);
        
    }
    else{
        echo "Initial load";
    }


?>
    <body>
    <div class='header'>
        <h1><a href= "../week1/index.php">SE 266 - Jake Desmarais</a></h1>
    </div>
    <div class='main'>

       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>

        <h2>Patient Intake</h2>
        <form action = 'intake.php' method='POST'>
        First Name: <input type="text" name="fName">
        <br>
        Last Name: <input type="text" name="lName">
        <br>
        Married? [Yes/No]: <input type="text" name="married">
        <br>
        Birthdate: <input type="datetime" name="birthDate">
        <br>
        Weight: <input type="text" name="weight">
        <br>
        Height: <input type="text" name="height">
        <br>
        <input type="submit" name="subBtn">
        </form>



            
    </div>

    <footer>
    <p style='color:white; text-align:center;'>Website Modified: 5/10/2020 at 9:19PM EST</p>
    </footer>
    </body>
</html>