<?php
require __DIR__ . "/classes/Vegetables.php";
require __DIR__ . "/classes/Fruit.php";
require __DIR__ . "/classes/Cheese.php";
require __DIR__ . "/classes/User.php";

$apple1 = new Fruit("Melinda", 0.53, 190, 6);
$apple2 = new Fruit("Farm's Apple", 0.33, 90);
$eggplant = new Vegetables("Farm's Eggplant", 0.15, 2, 3);
$mozzarella = new Cheese("Mozzarella", 1, 200);
$user1 = new User("Carlo", "Bianchi", "c.bianchi@mail.com", 5);
$user2 = new LoyalCustomer("Mario", "Rossi", "mario_rossi@mail.it", 10);

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
        <div class="product">
            <?= var_dump($apple1); ?>
            <br>
            <?= var_dump($apple2); ?>
            <br>
            <?= var_dump($eggplant); ?>
            <br>
            <?= var_dump($mozzarella); ?>
        </div>
        <div class="user">
            <?= var_dump($user1); ?>
            <br>
            <?= var_dump($user2); ?>
            <br>
        </div>
    </main>

</body>

</html>