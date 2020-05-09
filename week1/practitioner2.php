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
        $task = [ 
            'title' => '1972';
            'due' => 'Honda';
            'assigned_to' => 'CL350';
            'completed' => 'Sure';
        ];?>

        <?php foreach($task as $key=>$value){ ?>

        <li><?php echo "Key=".$key." value=".$value; ?></li>

        <?php }?>

        </ul>
        <p>Website Modified: 5/9/2020 at 4:48PM EST</p>

            
    
    </body>
</html>