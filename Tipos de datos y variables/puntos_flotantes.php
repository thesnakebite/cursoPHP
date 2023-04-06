<?php
$a = 12345.2e4;
$a = 1234.5678;
$a = 7E-10;

$e = 1.23456789;
$d = 1.2345678901;
$epsilon = 0.000001;

if( abs($e - $d) ) print "Son iguales";
else print "Son diferentes";