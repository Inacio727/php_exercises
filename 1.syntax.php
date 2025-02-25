<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Basic PHP Syntax -->

<h1>Minha primeira página em PHP</h1>

<?php
    ECHO "Olá, mundo!";
    echo "Olá, mundo!";
    EcHo "Olá, mundo!";
?>

<?php
$color = "red";
echo "My car is " . $color . "<br>"; // apenas esse vai funcionar, pq é case-sensitive
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>