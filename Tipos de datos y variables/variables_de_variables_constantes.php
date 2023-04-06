<?php
$cdmx = 22000000;
$guadalajara = 4000000;
$monterrey = 1400000;

// Variable de variables
$ciudad = "cdmx";
print "<p>La población de la ciudad $ciudad es de ${ciudad}</p>";

$ciudad = "guadalajara";
print "<p>La población de la ciudad $ciudad es de ${ciudad}</p>";

$ciudad = "monterrey";
print "<p>La población de la ciudad $ciudad es de ${ciudad}</p>";

// Creamos una constante
define("TASA_CAMBIO", 18.35, true);
$deuda = 12345;

print "Tu deuda es dólares es de ".($deuda * TASA_CAMBIO);
