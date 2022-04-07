<?php

// $numbers = [0,1,2,3,4,5];
$dbz = array('vegeta', 'goku', 'gohan');

// print_r($dbz);
// var_dump($dbz);

// echo $dbz[1];

// Arrays associativos
// $colors = [
//     1 => 'red',
//     2 => 'green',
//     3 => 'blue',
// ];

// echo $colors[3];

// $hex = [
//     'red' => '#f00',
//     'green' => '#0f0',
//     'blue' => '#00f',
// ];

// echo $hex['red'];

$users = [
    [
        'first_name' => 'Kyo',
        'last_name' => 'Kusanagi',
        'email' => 'kusanagi@test.com',
    ],
    [
        'first_name' => 'Benimaru',
        'last_name' => 'Nikaido',
        'email' => 'benimaru@test.com',
    ],
    [
        'first_name' => 'Goro',
        'last_name' => 'Daimon',
        'email' => 'daimon-goro@test.com',
    ]
];

// echo $users[1]['email'];

var_dump(json_encode($users));