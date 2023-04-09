<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador condicional</title>
</head>
<body>
    <?php

        $total = 1250;
        $tipoCambio = 18.50;
        $granTotal = ($tipoCambio > 0) ? $total * $tipoCambio : $total;
        $cadena = ($tipoCambio > 0) ? ", tipo de cambio ".$tipoCambio : "";

        print "El gran total del pedido es ". $granTotal . $cadena; 


    ?>
</body>
</html>