<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <?php
        $edad = 28;
        // Si es true
        if ($edad > 76) {
            print "<p>Lo sentimos, esta página puede resultar ofensiva para tu salud, eres de una generación muy avanzada para que lo entiendas.</p>";
        } else if ($edad > 30) {
            print "<p>Bienvenido a nuestra página, donde encontrarás lo que siempre has buscado.</p>";
        } else if ($edad > 18) {
            print "<p>Bienvenido a nuestra página, estás en edad de comprar nuestros productos.</p>";
        } else {
            print "<p>Lo sentimos, no puedes entrar a nuestra página</p>";
        }
    ?>
</body>
</html>