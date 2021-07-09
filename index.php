<?php
require __DIR__ . "/classes/Vegetables.php";
require __DIR__ . "/classes/Fruit.php";
require __DIR__ . "/classes/Cheese.php";

$apple1 = new Fruit("Melinda", 0.53, 190, 6);
$apple2 = new Fruit("Farm's Apple", 0.33, 90);
$eggplant = new Vegetables("Farm's Eggplant", 0.15, 2, 3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Market</title>
</head>

<body>

    <header>
        <h1>Farm Market</h1>
    </header>

    <main>
        <?= var_dump($apple1); ?>
        <br>
        <?= $apple1->iCanBuyIt(); ?>
        <br>
        <?= var_dump($apple2); ?>
        <br>
        <?= $apple2->iCanBuyIt(); ?>
        <br>
        <?= var_dump($eggplant); ?>
        <br>
        <?= $eggplant->iCanBuyIt(); ?>
    </main>

</body>

</html>