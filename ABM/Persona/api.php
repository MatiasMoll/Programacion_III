<?php

class miApi{

    public static function myApi($metodo,$path)
    {
        $retorno = new stdClass;
        $retorno->success = true;
        $retorno->data = null;
    
        switch($metodo)
        {
            case 'GET':
                switch($path)
                {
                    case '/persona':
                        $retorno->data = Persona::creacionPersona($_GET["id"],$_GET["name"],$_GET["lastname"]);//        
                    break;
            
                    case '/perro':
                        $retorno->data = $_GET["lastname"];
                    break;
            
                }
            break;
        }
        return $retorno;
    }
}
