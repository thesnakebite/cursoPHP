<?php

$division = 10/3;
print "Resultado de la división de 10 / 3". " es de ". $division. "<br />";

$entero = (int) $division;
print "Y con la ayuda de la función de PHP (int) nos devuleve ".$entero;

var_dump($division);
print "<br />";
print "<br />";

echo "La función <b>intval</b> se utiliza para obtener el valor entero de una variable, intval(10/3) sería de  ";
print intval(10/3);

print "<br />";
echo "La función <b>settype()</b> se utiliza para cambiar el tipo de una variable, la sintaxis de la función sería settype(variable, tipo)";
print ", y esto nos devolverá si fue correcta o no la conversión mediante una expresion booleana, en este caso es de ". 
settype($division, "integer") .
 " así que fue correcta";
print "<br />";
echo " y podemos realizar la comprobación mediante un var_dump si queremos comprobarlo <b>" .
print var_dump($division) . "</b>";