<?php
// Activity 11: Fibonacci Sequence
$fibonacci = [0, 1];
$count = 2;

while ($count < 10) {
    $fibonacci[] = $fibonacci[$count - 1] + $fibonacci[$count - 2];
    $count++;
}

echo implode(" ", $fibonacci);
?>
