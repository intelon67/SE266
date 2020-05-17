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
    $currentAmount = intval($_POST['monAmount']);
    $monthlyInvestment = intval($_POST['monAmount']);
    $interestRate = intval($_POST['intRate']);
    $numMonths = intval($_POST['numMonths']);
    $saved = calculate_savings($currentAmount,$monthlyInvestment,$interestRate,$numMonths);

    function calculate_savings($currentAmount,$monthlyInvestment,$interestRate,$numMonths){
        $monthlyInterest = $interestRate/12/100;
        for($i=1;$i<$numMonths;$i++){
            $currentAmount += $monthlyInvestment;
            $monthlyIncrease = ($currentAmount + $monthlyInvestment) * $monthlyInterest;
            $saved = $currentAmount+$monthlyIncrease;
            echo "<br> $saved";
        }
        return $saved;
       
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
        <p>Saved amount: <?php echo $saved; ?> </p>
        <br>
        CurrentAmount = <?php echo $currentAmount; ?>
        <br>
        Monthly Investment = <?php echo $monthlyInvestment; ?>
        <br>
        Interest Rate = <?php echo $interestRate; ?>
        <br>
        NumMonths = <?php echo $numMonths; ?>
        <br>
        Monthly Increase = <?php echo $monthlyIncrease; ?>
        </form>




            
    </div>

    <footer>
    <p style='color:white; text-align:center;'>Website Modified: 5/17/2020 at 10:19AM EST</p>
    </footer>
    </body>
</html>