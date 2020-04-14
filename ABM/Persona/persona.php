<?php

class Persona{
    
    public $id;
    public $nombre;
    public $apellido;
    
    public function __construct($id, $name,$lastname)
    {
        $this->id = $id;
        $this->nombre = $name;
        $this->apellido = $lastname;
    }

    public static function creacionPersona($id, $name, $lastname){
        return new Persona($id,$name,$lastname);
    }
}