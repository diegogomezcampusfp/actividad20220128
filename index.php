<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actividad</h2>
    <?php
    echo "<h3>Clases y objetos</h3>";

    require('productos.php');

    $producto1=new productos(1,"Camiseta",5,7.99, 48.0975);//instanciar
    //Setter
    echo $producto1->setPrecio(7.95);
    //Getter
    echo $producto1->getId();
    echo $producto1->getNombre();
    echo $producto1->getUnidades();
    echo $producto1->getPrecio();
    echo "El total de la factura sería 39.75 con un iva de: ".$producto1->getFactura();


    ?>
</body>
</html>
