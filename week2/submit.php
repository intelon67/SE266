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

        $fName = strval($_POST['fName']);
        $lName = strval($_POST['lName']);
        $married = strval($_POST['married']);
        $birthdate = strval($_POST['birthDate']);
        $weight = intval($_POST['weight']);
        $ft = intval($_POST['ft']);
        $in = intval($_POST['in']);

    function submit($fName,$lName,$married,$birthdate,$weight,$ft,$in){
        if(empty($fName) && empty($lName) && empty($married) && empty($birthdate) && empty($weight) && empty($ft) && empty($in)){
            echo "Strings are empty!";
        }
        else{
            echo "All good!";
        }
    }

    submit($fName,$lName,$married,$birthdate,$weight,$ft,$in);

?>
    <body>
    <div class='header'>
        <h1><a href= "../week1/index.php">SE 266 - Jake Desmarais</a></h1>
    </div>
    <div class='main'>

       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>

        <h2>Patient Intake</h2>




            
    </div>

    <footer>
    <p style='color:white; text-align:center;'>Website Modified: 5/17/2020 at 10:19AM EST</p>
    </footer>
    </body>
</html>