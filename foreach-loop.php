<?php

$students = [
    'Jeff',
    'Franzi',
    'Maya',
    'Tanja',
    'Katharina',
    'Janaina',
    'Tobias',
    'Simon',
    'Connie',
];

foreach($students as $item) {
    echo  "$item is there. \n";
}

echo "\n";

$products = [
    ['name' => 'Item 1', 'price' => 90],
    ['name' => 'Item 2', 'price' => 15],
    ['name' => 'Item 3', 'price' => 50],
];
$total = 0;

foreach($products as $product) {
    echo 'The ' . $product['name'] . ' costs ' . $product['price'] . "\n";
    $total += $product['price'];
}

echo "The total price for your items is: $total";