<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SE 266 - PHP Practioner 2</title>
    </head>
    <body style="margin:auto; max-width:600px;">
    
    <h1><a href= "index.php">SE 266 - Jake Desmarais</a></h1>
       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>

        <ul>
        <?php

            $task = array("title"=>"Ride Bike", "due"=>"Sunday 4PM EST", "assigned_to"=>"Jake", "completed" => "Yes");

            foreach ($task as $key=>$value){
	            echo "<b>Key:  </b> ".$key."                <b>Value:  </b>".$value;
	            echo "<br>";
                        }       
        ?> 

        </ul>
        <p>Website Modified: 5/9/2020 at 5:13PM EST</p>

            
    
    </body>
</html>