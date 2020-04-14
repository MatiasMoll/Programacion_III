<?php

require_once "./autoload.php";
use NNV\RestCountries;

$PaisesRest = new RestCountries;

$Paises = $PaisesRest->byCapitalCity("Buenos Aires");
echo json_encode($Paises);

