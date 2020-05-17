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

    function submit($fName,$lName,$married,$birthdate,$weight,$ft,$in){
        if(empty($fName) && empty($lName) && empty($married) && empty($birthdate) && empty($weight) && empty($ft) && empty($in)){
           
        }
        else{
            
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