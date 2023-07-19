<?php
class Persona
{
    private $nombre;
    private $telefono;

    private function __construct($nom, $tel)
    {
        $this->$nombre = $nom;
        $this->$telefono = $tel;
    }

    public function obtener_datos()
    {
        $data = array("nombre" => $this->nombre, "telefono" => $this->tel);
        return $data;
    }
}

class Alumno extends Persona
{
    private $grado;
    private $turno;

    private function __construct($gra, $tur)
    {
        $this->$grado = $gra;
        $this->$turno = $tur;
    }

    public function obtener_datos()
    {
        $data = array("grado" => $this->grado, "turno" => $this->turno);
        return $data;
    }
}
