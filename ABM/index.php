<?PHP

require './Persona/persona.php';

$valorDevuelto = miApi::myApi('GET','/persona');
echo($valorDevuelto->nombre);