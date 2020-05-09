<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SE 266 - Fizz Buzz</title>
    </head>
    <body style="margin:auto; max-width:600px;">
    
		<h1>SE 266 - Jake Desmarais</h1>
       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>
       <br>

        <?php 
            $num = 0;

            for($i=0;$i<=100;$i++){
                
                if($i % 2 == 0){
                    echo "fizz";
                }
                elseif($i % 3 == 0){
                    echo "buzz";
                }
                else{
                    echo "fizz buzz";
                }
                echo "<br>";
                $num += 1;
            }
        
        ?>

        <p>Website Modified: 5/9/2020 at 7:09PM EST</p>

            
    
    </body>
</html>