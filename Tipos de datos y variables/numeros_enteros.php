<?php
$num = 12345678;
$num = -12345678;
$num =01234567; // Octal 0-7
$num = 0xFFAADD; // Hexadecimal
$num = 0b1010101; // Binario 0-1

$num = 2147483647;
print var_dump($num);

echo "<br />";

$num = 2147483648;
print var_dump($num);

$num = 2147483648*2;
print var_dump($num);