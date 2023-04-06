<?php

// El operador nave espacial se emplea para comparar dos expresiones
// Devuleve -1 0 o 1 cuando $a es respectivamente menor, igual, o mayor que $b.
// Las comparaciones se realian según las reglas de comparación de tipos
// usuales de PHP.

print 1 <=> 1;
print "<br />";
print 1 <=> 2;
print "<br />";
print 2 <=> 1;
print "<br />";
print 1.5 <=> 1.5;
print "<br />";
print 1.5 <=> 2.1;
print "<br />";
print 2.1 <=> 1.5;
print "1" <=> "1";
print "<br />";
print "2" <=> 2;
