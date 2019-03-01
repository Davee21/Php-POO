<?php 

require_once("poo.php");

//primer instancia(valores de memoria) o un objeto de la clase persona

$luis = new Persona($name="Luis", $lastname="Perez", $dateofbirth="2010-03-23");

echo $luis->name."<br>";
echo $luis->lastname."<br>";
echo $luis->dateofbirth."<br>";


?>