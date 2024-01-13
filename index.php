<?php
require __DIR__ . './dati.php';
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
    var_dump($movies);

    foreach ($movies as $film) {
        echo $film->getInfo();
        echo "<br>";
    }
    ?>
</body>

</html>