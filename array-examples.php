<?php 

$user = [
    'name' => "Jeff",
    'lastname' => 'Souza',
    'age' => 37,
    'city' => 'Munich',
    'orders' => [
        'number' => 98,
        'item' => 'Computer',
        'price' => 1999
    ]
];

echo $user['orders']['price'];

$items = [
    'Computer', // -> 0
    'Printer',// -> 1
    'Mouse',// -> 2
    'Keyboard',// -> 3
];

echo "\n\n";

echo $items[3];
