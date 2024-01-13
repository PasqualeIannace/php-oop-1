<?php
require __DIR__ . './dati.php';

$film1 = new Movie("Barbie", "Greta Gerwig", "Commedia/Cinema fantastico", "21 luglio 2023");
$film2 = new Movie("12 Angry Men", "Sidney Lumet", "Giallo/Thriller", "14 novembre 1957");
$film3 = new Movie("Blue Valentine", "Derek Cianfrance", "Romantico/Drammatico", "14 febbraio 2013");
$film4 = new Movie("After Hours", "Martin Scorsese", "Commedia/Thriller", "11 ottobre 1985");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - PHP</title>
</head>

<body>
    <?php
    var_dump($film1);

    echo $film1->getInfo();
    ?>
</body>

</html>