<?php

$cities_tem = [
    [
        'city' => 'sehwan',
        'today_tem' => 50,
        'yesterday_tem' => 42,
        'previousDay_tem' => 44,
    ],
    [
        'city' => 'hyd',
        'today_tem' => 30,
        'yesterday_tem' => 32,
        'previousDay_tem' => 47,
    ]
];

foreach ($cities_tem as $tem) {
    echo '<h3>' . 'city' . $tem['city'] . '</h3>';
    echo 'today_tem = ' . $tem['today_tem'] . '<br>';
    echo 'yesterday_tem = ' . $tem['yesterday_tem'] . '<br>';
    echo 'previousDay_tem = ' . $tem['previousDay_tem'] . '<br>';

    echo '<h5>' . 'Average = ' . ($tem['today_tem'] + $tem['yesterday_tem'] + $tem['previousDay_tem']) / 3 . '</h5> ' . '<br> <br> <br>';




}


?>