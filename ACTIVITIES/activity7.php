<?php
// Activity 7: Key-Value Pairs with foreach
$studentInfo = [
    "Name" => "Alice",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
];

foreach ($studentInfo as $key => $value) {
    echo "$key: $value<br>";
}
?>
