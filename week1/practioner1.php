<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SE 266 - PHP Practioner 1</title>
    </head>
    <body style="margin:auto; max-width:600px;">
    
    <h1><a href= "index.php">SE 266 - Jake Desmarais</a></h1>
       
       <a href="https://github.com/intelon67/SE266" style="font-size:24px;">My Github Repo</a>

        <ul>
        <?php $animals=['dog','horse','dolphin','zebra','monkey'];?>

        <?php foreach($animals as $value){ ?>

        <li><?php echo $value; ?></li>

        <?php }?>

        </ul>
        <p>Website Modified: 5/9/2020 at PM EST</p>

            
    
    </body>
</html>