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

    $current_amount = $_POST['monAmount'];
    $interest = $_POST['intRate'];
    $numMonths = $_POST['numMonths'];
    $savings = calculate_savings($current_amount,$numMonths,$interest);
    $finalSaved = 0;

    function calculate_savings($current_amount,$month_amount,$interest){
        $monthlyIntRate = $interest/$month_amount/$current_amount;

        $savedAmount = $current_amount * (1+$monthlyIntRate);

        return $savedAmount;
    }

    for (i=0;i<$numMonths;i++){
        $finalSaved += $savings;
    }

    ?>
    <body>
    <div class='header'>
        <h1><a href= "../week1/index.php">SE 266 - Jake Desmarais</a></h1>
    </div>
    <div class='main'>

       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>

        <h2>Savings Calc</h2>
        <form action = 'savings.php' method='POST'>
        <br>
        <p>Saved amount: <?php echo $finalSaved; ?> </p>
        </form>




            
    </div>

    <footer>
    <p style='color:white; text-align:center;'>Website Modified: 5/17/2020 at 10:19AM EST</p>
    </footer>
    </body>
</html>