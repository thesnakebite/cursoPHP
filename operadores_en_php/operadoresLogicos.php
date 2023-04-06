<?php

$dinero = false;
$tiempo = true;


// El operador AND o && es el pesimista
if ($dinero and $tiempo) {
    print "Voy al cine";
} else {
    print "Me quedo en casa";
}

echo "<br><br>";

// El operador OR o || es el optimista
if ($dinero OR $tiempo) {
    print "Voy al cine";
} else {
    print "Me quedo en casa";
}

// El operador XOR