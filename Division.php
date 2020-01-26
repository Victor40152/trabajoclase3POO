<?php
require_once "Matematicas.php";



class Division extends Matematicas{

public function dividir(){
    return ($this->getNumero1()/ $this->getNumero2());
}



}




?>