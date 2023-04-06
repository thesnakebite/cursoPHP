<?php

var_dump(014); 
// var_dump lo va a interpretar como un valor octal, 
// pero var_dump lo que nos va a decir es que es un valor entero y lo va a pasar a decimal

// A partir de la versión de PHP 8.1 y versiones posteriores, mediante una o en 
// minúsculas podemos indicar que es un valor octal
print "<br />";
var_dump(0o14 === 14);

print "<br />";
var_dump(0o14 === 12);