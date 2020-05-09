<html>
<body>

<?php 
$age = intval($_POST["age"]);
echo $age;

function ageVerf($age){
    if ($age < 21) {
        echo "You are not old enough.";
    }
    else {
        echo "You are old enough.";
    }
}

?>

</body>
</html>