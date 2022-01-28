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
    echo "<p>".$producto1->getId(). "</p>";
    echo "<p>".$producto1->getNombre(). "</p>";
    echo "<p>".$producto1->getUnidades(). "</p>";
    echo "<p>".$producto1->getPrecio(). "</p>";
    echo "<p>".$producto1->getFactura()."</p>";


    ?>
</body>
</html>
