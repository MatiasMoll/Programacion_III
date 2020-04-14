<?php

class Perro{

    public $nombre;
    public $raza;
    public $id;

    public function __construct($nombre, $race, $id)
    {
        $this->nombre = $nombre;
        $this->raza = $race;
        $this->id = $id;
    }

}