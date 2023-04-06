<?php

$pais = null;
$sesion = null;
// PHP7

// Realizamos 3 verificaciones, si la sesion existe, dos que dentro de la
// sesión existe el usuario y tres que dentro del objeto usuario exista  
// también la dirección y que sea diferente a nulo
if($sesion !== null) {
    $usuario = $sesion->usuario;

    if($usuario !== null) {
        $direccion = $usuario->getdireccion();

        if($direccion !== null) {
            $pais = $direccion->pais;
        } 
    }
}

var_dump($pais);