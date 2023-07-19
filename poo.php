<?php
class Automovil
{
    #datos - atributos
    public $motor, $color, $marca;

    # constructor, es una funcion que se llama 
    #al momento de crear el objeto

    public function __construct($color, $m, $k)
    {
        $this->color = $color;
        $this->motor = $m;
        $this->marca = $k;
    }

    #operaciones - metodos

    function get_color()
    {
        return $this->color;
    }
    function set_color($c)
    {
        $this->color = $c;
    }
}
?>
<?php

#declaracion e instanciacion(materialización)

$auto1 = new Automovil("rojo", "2000CC, naftero", "Toyota");
printf("El auto es de color: %s", $auto1->get_color());
printf("<br>El auto es del motor: %s", $auto1->motor);
printf("<br>El auto es de la marca: %s", $auto1->marca);

$auto[0] = new Automovil("rojo", "2000CC, naftero", "Toyota");

?>