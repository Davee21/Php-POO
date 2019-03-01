<?php 

// 1.- abstraccion, que elementos caracterizan a una persona inequivocamente y que sean generales
//     encontrar caracteristicas(atributos) de una entidad  o realidad (persona)

// Clase es un molde para crear objetos, ejemplos: plano, boceto etc.
class Persona
{

// 3.-  atributos o estado son como caracteristicas generales de la clase en este caso de persona	 

// Mecanismo de proteccion de componentes, los componentes son $name, walk y los podemos proteger
// modificadores de acceso = public, private 

  public $name;
  public $lastname;
  public $dateofbirth;
  

// Un contructor no sirve para Asosiar valor de inicializacion
// un contructor es un inicializador de objetos

  public function __construct($name,$lastname,$dateofbirth){

  	$this->name = $name;
  	$this->lastname = $lastname;
  	$this->dateofbirth = $dateofbirth; 
  	
  }	

// 4.- comportamiemto o metodos, que puede hacer esa entidad en este caso persona
  public function walk(){

  }

  public function login(){

  } 
}
// el resultado de correr una clase es un objeto, es decir del molde salen galletas y estas
// tienen atributos


?>