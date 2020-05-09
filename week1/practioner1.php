<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SE 266 - PHP Practioner 1</title>
    </head>
    <body style="margin:auto; max-width:600px;">
    
		<h1>SE 266 - Jake Desmarais</h1>
       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>
        <?php

            $animals = animals('Giraffe'=>'Donkey'=>'Zebra'=>'Hippo'=>'Gorilla');
            $animals = animals_values($animals);

            
            echo "<ul>"
            echo "<li>$animals[0]</li>"
            echo "<li>$animals[1]</li>"
            echo "<li>$animals[2]</li>"
            echo "<li>$animals[3]</li>"
            echo "<li>$animals[4]</li>"
            echo "</ul>"

        ?>

        <p>Website Modified: 5/9/2020 at 4:08PM EST</p>

            
    
    </body>
</html>