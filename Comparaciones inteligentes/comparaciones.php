<?php

print 0 == '0' ? "Verdadero" : "Falso";
echo "<br />";
print 0 === '0' ? "Verdadero" : "Falso";
echo "<br />";
// Con la nueva version de PHP toma decisiones y que antes
// no lo hacia, devolvía verdadero, simplemente 0 es falso a cualquier cadena
print 0 === 'Esto es una cadena' ? "Verdadero" : "Falso";
