<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class productos
{
    private string $id;
    private string $nombre;
    private int $unidades;
    private float $precio;
    private float $factura;

    public function __construct(int $id, string $nombre, int $unidades, float $precio, float $factura)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
        $this->factura=$factura;
    }
    //Setter
    public function setId(int $id)
    {
        $this->id=$id;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre=$nombre;
    }

    public function setUnidades(int $unidades)
    {
        $this->unidades=$unidades;
    }

    public function setPrecio(float $precio)
    {
        $this->precio=$precio;
    }

    public function setFactura(float $factura)
    {
        $this->factura=$factura;
    }
    //Getter
    public function getId():Int
    {
        return $this->id;
    }

    public function getNombre():String
    {
        return $this->nombre;
    }

    public function getUnidades():Int
    {
        return $this->unidades;
    }

    public function getPrecio():Float
    {
        return $this->precio;
    }

    public function getFactura():Float
    {
        return $this->factura;
    }
}
?>
</body>
</html>
