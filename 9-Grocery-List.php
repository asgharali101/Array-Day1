<?php

$fruitlist = [
    [
        'Shop' => 'Al-jasim-shop-rate',
        'banana' => 300,
        'orange' => 500,
        'apple' => 400,
        'grapes' => 100,
        'peans' => 350,
        'watermelon' => 550,

    ],

    [
        'Shop' => 'Ali-fruit-shop-rate',

        'banana' => 500,
        'orange' => 600,
        'apple' => 300,
        'grapes' => 150,
        'peans' => 380,
        'watermelon' => 450,

    ],

    [
        'Shop' => 'Al-ibrar-shop-rate',
        'orange' => 400,

        'banana' => 350,
        'apple' => 600,
        'grapes' => 200,
        'peans' => 250,
        'watermelon' => 650,

    ],

];

ksort($fruitlist);


// foreach ($fruitlist as $key => $fruit) {
//     foreach ($fruit as $name => $fruitname) {
//         //

//         echo $name . '==' . $fruitname . '<br>';
//         // echo 'banana = ' . $fruit['banana'] . '<br>';
//         // echo 'orange = ' . $fruit['orange'] . '<br>';
//         // echo 'apple = ' . $fruit['apple'] . '<br>';
//         // echo 'grapes = ' . $fruit['grapes'] . '<br>';
//         // echo 'peans = ' . $fruit['peans'] . '<br>';
//         // echo 'watermelon = ' . $fruit['watermelon'] . '<br> <br>';


//     }
//     echo ($fruit['banana'] + $fruit['orange'] + $fruit['apple'] + $fruit['grapes'] + $fruit['peans'] + $fruit['watermelon']);

// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2 cellpadding:'5px'">
        <thead>
            <th></th>
        </thead>
        <tbody>

            <?php
            foreach ($fruitlist as $key => $fruit) { ?>
            <tr>
                <?php foreach ($fruit as $name => $fruitname) { ?>

                <td>
                    <?php echo $name . '==' . $fruitname ?>
                </td>
                <?php } ?>
                <td>
                    <?php echo 'total = ' . ($fruit['banana'] + $fruit['orange'] + $fruit['apple'] + $fruit['grapes'] + $fruit['peans'] + $fruit['watermelon']); ?>
                </td>




            </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>