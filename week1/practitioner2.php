<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SE 266 - PHP Practioner 1</title>
    </head>
    <body style="margin:auto; max-width:600px;">
    
		<h1>SE 266 - Jake Desmarais</h1>
       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>

        <ul>
        <?php

            $colors = array("0"=>"Red","1"=>"Green","2"=>"Blue");

            echo "0th element of array is " . $colors["0"];
            echo "<br>";
            //looping
            foreach ($colors as $key=>$value){
	            echo "Key=".$key." value=".$value;
	            echo "<br>";
                        }       
        ?> 

        </ul>
        <p>Website Modified: 5/9/2020 at PM EST</p>

            
    
    </body>
</html>