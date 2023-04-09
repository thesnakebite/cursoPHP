<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencias condicionales anidadas</title>
</head>
<body>

    <?php
        $edad = 18;
        $edoCivil = "soltero";

        if ($edad < 40) {
            print "Disfrute de nuestro crucero en el Caribe ";
                if ($edoCivil == "casado") {
                    print "en compañia de su familia ";
                }
                print "con un descuento especial y muchas sorpresas";
        } else {
            print " Lo invitamos a nuestro retiro en el campo, donde encontrara paz ";
                if ($edoCivil == "casado") {
                    print "con sus seres queridos ";
                } else { 
                    print "de encontrarse con usted mismo ";
                }
                print " en lo alto de un hermoso lago en las montañas Suizas,";
            }
            print "<br />"; 
            print "Su edad es de ". $edad . " años y su estado civil es ". $edoCivil;
    ?>
    
</body>
</html>