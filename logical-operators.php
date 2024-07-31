<?php 

// Logical operators

$name = 'Jeff';
$age = 37;
$today = 'Sunday';

if($name != '') {
    echo 'Hey ' . $name;
}

echo "\n";

if($name != '' && $age >= 30) {
    echo "Hey $name, you are getting... experient. 🤗";
}

echo "\n";

if($today == 'Saturday' || $today == 'Sunday') {
    echo "Hey $name, enjoy the weekend. 😎";
}

echo "\n";

if(($name != '' && $age >= 30) || ($today == 'Saturday' || $today == 'Sunday')) {
    echo "Hey $name, enjoy the weekend. 😎";
}

// true && true => true
// true && false => false
// false && false => false
// true || true => true
// true || false => true
// false || false => false