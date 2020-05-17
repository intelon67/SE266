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


$fName = isEmpty(strval($_POST['fName']));
$lName = isEmpty(strval($_POST['lName']));
$married = isEmpty(strval($_POST['married']));
$birthdate = isDate(strval($_POST['birthDate']));
$weight = isEmpty(intval($_POST['weight']));
$ft = isEmpty(intval($_POST['ft']));
$in = isEmpty(intval($_POST['in']));
$bmi = isEmpty(bmi($ft,$inch,$weight));
$bmiDesc = isEmpty(bmiDescription($bmi));
$age = age($birthdate);


 function age ($bdate) {

    $date = new DateTime($bdate);

    $now = new DateTime();

    $interval = $now->diff($date);



    return $interval->y;

}

function isEmpty($var){
    if(empty($var)){
        $error = "Error, empty string!";
        return $error;
    }
    else{
        return $var;
    }
}

function isDate($dt) {

    try {

        $d = new DateTime($dt);

        return $dt;

    } catch(Exception $e) {
        $error = "Error!";
        return $error;

    }

}

function bmi ($ft, $inch, $weight) {
    $kg = $weight / 2.20462;
    $ft2Meter = ($ft * 12) * 0.0254;
    $in2Meter = $inch * 0.0254;

    $meters = $ft2Meter + $in2Meter;

    $BMI = $kg / ($meters * $meters);
    $BMI = round($BMI,1);

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
    
    return $BmiDesc;
}


?>
    <body>
    <div class='header'>
        <h1><a href= "../week1/index.php">SE 266 - Jake Desmarais</a></h1>
    </div>
    <div class='main'>

       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>

        <h2>Patient Intake</h2>

        First Name: <?php echo $fName;?>
        <br>
        Last Name: <?php echo $lName;?>
        <br>
        Married: <?php echo $married; ?>
        <br>
        Birthdate: <?php echo $birthdate; ?>
        <br>
        Height: <?php echo $ft; echo " Feet "; echo $in; echo " Inches";?>
        <br>
        Weight: <?php echo $weight; ?>
        <br>
        Age: <?php echo $age; ?>
        <br>
        BMI: <?php echo $bmi ?>
        <br>
        BMI Class: <?php echo $bmiDesc; ?>


            
    </div>

    <footer>
    <p style='color:white; text-align:center;'>Website Modified: 5/17/2020 at 10:19AM EST</p>
    </footer>
    </body>
</html>