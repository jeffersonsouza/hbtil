<?php 
$today = 'Monday';
$age = 37; // integer

// the "if" operator always needs a condition
// the "if" block will only be executed if the condition is true
if($today === 'Wednesday') {
    echo "It's class day.";
} else if($today === 'Tuesday') {
    echo 'It\'s office day';
} else if($today === 'Monday') {
    echo 'It\'s Week start day';
} else if($today === 'Friday') {
    echo 'It\'s the best day';
} else {
    echo 'Dunno.';
}