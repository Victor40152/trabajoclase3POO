<?php
require_once "Matematicas.php";



class Multiplicacion extends Matematicas{

public function multiplicar(){
    return ($this->getNumero1()* $this->getNumero2());
}



}




?>