<?php

// $pais = null;
$sesion = null;
// PHP7
// Realizamos 3 verificaciones, 1 si la sesion existe, 2 que dentro de la
// sesión existe el usuario y tres que dentro del objeto usuario exista  
// también la dirección y que sea diferente a nulo y si se cumplen estas
// 3 condiciones entonces país esta dentro de dirección país.

// if($sesion !== null) {
//     $usuario = $sesion->usuario;

//     if($usuario !== null) {
//         $direccion = $usuario->getdireccion();

//         if($direccion !== null) {
//             $pais = $direccion->pais;
//         } 
//     }
// }

// var_dump($pais);

echo "<br />";
// PHP8 (FAT ARROW =>)
// Operador Nullsafe (?->), si no existes no me mandes error, llamame simplemente un NULL
// $pais = $sesion?->usuario?->getAddress()?->pais;
$pais = $session?->usuario?->getAddress()?->pais;

var_dump($pais);