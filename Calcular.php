<?php 

require_once "Sumar.php";
require_once "Resta.php";
require_once "Multiplicacion.php";
require_once "Division.php";

$objdividir = new Division();
$objmultiplica = new Multiplicacion();
$objResta = new Resta();
$objSuma =new Sumar();
$numero1=$_POST["txtnumero1"];
$numero2=$_POST["txtnumero2"];

if (isset($_POST["btnsumar"])){

    $objSuma->setNumero1($numero1);
    $objSuma->setNumero2($numero2);
    echo $objSuma->sumar();

}
if (isset($_POST["btnrestar"])){

    $objResta->setNumero1($numero1);
    $objResta->setNumero2($numero2);
    echo  $objResta->restar();

}

if (isset($_POST["btnmultiplicar"])){

    $objmultiplica->setNumero1($numero1);
    $objmultiplica->setNumero2($numero2);
    echo $objmultiplica->multiplicar();

}
if (isset($_POST["btndivision"])){

    $objdividir->setNumero1($numero1);
    $objdividir->setNumero2($numero2);
    echo $objdividir->dividir();

}




?>