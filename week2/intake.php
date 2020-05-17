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
        Married: <input type="radio" name="married" value="yes">Yes <input type="radio" name="married" value="no">No
        <br>
        Birthdate: <input type="date" name="birthDate" value ="">
        <br>
        Weight: <input type="number" name="weight">
        <br>
        Height: 
        <br>
        Feet:<input type="number" name="ft">
        Inches: <input type="number" name = "in">
        <br>
        <input type="submit" name="subBtn">
        </form>



            
    </div>

    <footer>
    <p style='color:white; text-align:center;'>Website Modified: 5/17/2020 at 10:19AM EST</p>
    </footer>
    </body>
</html>