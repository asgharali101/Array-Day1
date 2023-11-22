<?php $home_tem = [];
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
    $home_tem[] = $tem['city'];
    $home_tem[] = $tem['today_tem'];
    $home_tem[] = $tem['yesterday_tem'];
    $home_tem[] = $tem['previousDay_tem'] . '<br>';
}


foreach ($home_tem as $key => $city) {
    echo $city . '<br>';
}
?>