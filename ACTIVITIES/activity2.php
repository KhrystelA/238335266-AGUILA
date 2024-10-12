<?php
// Activity 2: Password Validator
$correctPassword = "password123";
$inputPassword = "";

do {
    $inputPassword = readline("Please enter the password: ");
    if ($inputPassword !== $correctPassword) {
        echo "Incorrect password.\n";
    }
} while ($inputPassword !== $correctPassword);

echo "Access Granted.";
?>
