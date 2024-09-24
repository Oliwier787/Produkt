<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie Zamówienia</title>
</head>
<body>
    
<?php
    $rogale = $_POST['rogale'];
    $bułki = $_POST['bulki'];
    $sok = $_POST['sok'];
    $suma = (1.20 * $rogale) + (0,66 * $bulki) + (2,45 * $sok);

</body>
</html>