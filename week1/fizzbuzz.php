<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SE 266 - PHP Practioner 4</title>
    </head>
    <body style="margin:auto; max-width:600px;">
    
		<h1>SE 266 - Jake Desmarais</h1>
       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>
       <br>

        <?php 

        function fizzbuzz($i){
            if (($i % 2) == 0){
                echo "Fizz";
            }
            elseif (($i % 3) == 0){
                echo "Buzz";
            }
            elseif (($i % 2) == 0) & (($i % 3) == 0){
                echo "Fizz Buzz";
            }
        }

        for ($i=0; $i<100; $i++)
        {
            fizzbuzz($i);
        }
        
        ?>

        <p>Website Modified: 5/9/2020 at 6:26PM EST</p>

            
    
    </body>
</html>