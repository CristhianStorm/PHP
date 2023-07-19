<!DOCTYPE html>
<html>

<head>
    <title> Array </title>
    <meta charset="UTF-8" />
</head>

<body>
    <?php
    $productos = array(
        array("Heladera", 2500000, 18,),
        array("Microodas", 1500000, 9),
        array("Cocina", 590000, 21),
        array("Licuadora", 260000, 5),
        array("Mixer", 260000, 5),
        array("Ventilador", 150000, 15),
    );

    for ($x = 0; $x < count($productos); $x++) {                                //Para imprimir todos los valores
        printf("<br>Productos: %s", $productos[$x][0]);                        //la [$x] es la fila y la columna es [0]
        printf("<br>Precio: %s", $productos[$x][1]);
        printf("<br>Cantidad: %s", $productos[$x][2]);
        printf("<br>----------------------------------------");
    }
    printf("<br><br>Precios menores a 1000000<br>");
    for ($x = 0; $x < count($productos); $x++) {                         //Para imprimir los valores que son menores a 1000000
        if ($productos[$x][1] < 1000000) {                              //le agregamos una condición 
            printf("<br>Productos: %s", $productos[$x][0]);
            printf("<br>Precio: %s", $productos[$x][1]);
            printf("<br>Cantidad: %s", $productos[$x][2]);
            printf("<br>----------------------------------------");
        }
    }
    ?>

</body>

</html>