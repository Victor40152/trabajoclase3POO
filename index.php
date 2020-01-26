<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="tex/html; charset=utf-8" />
        <title>Ejercicio3</title>
   
      <script>
      function proceso(txtnumero1,txtnumero2,boton){
          switch (boton){
          case "+":
              var parametros ={
                  "txtnumero1": txtnumero1,
                  "txtnumero2": txtnumero2,
                  "btnsumar": boton
              };
              break;
              case "-":
              var parametros ={
                  "txtnumero1": txtnumero1,
                  "txtnumero2": txtnumero2,
                  "btnrestar": boton
              };
              break;
              case "x":
              var parametros ={
                  "txtnumero1": txtnumero1,
                  "txtnumero2": txtnumero2,
                  "btnmultiplicar": boton
              };
              break;
              case "/":
              var parametros ={
                  "txtnumero1": txtnumero1,
                  "txtnumero2": txtnumero2,
                  "btndivision": boton
              };
              break;

          }

          $.ajax({
          data: parametros,
          url: 'Calcular.php',
          type :'post',
          beforeSend:
          function (){
              $('#resultado').html('cargando!...');
          },
          success:function (response){

            $('#resultado').html(response);
          }



          });


      }
      
      
      </script>
   
   
    </head>
    <body>
        

        <h1 >Ejemplo POO herencia basica en php</h1>
          
<form name="form1" method="POST">
    Número 1: <input type="text" name="txtnumero1" id="txtnumero1">
    <br>
    Número 2: <input type="text" name="txtnumero2" id="txtnumero2">
    <br>
    <input type="button" name="btnsumar" id="btnsumar" value="+"
    onclick="proceso($('#txtnumero1').val(),$('#txtnumero2').val(),$('#btnsumar').val());">
    <br>
    <input type="button" name="btnrestar" id="btnrestar" value="-"
    onclick="proceso($('#txtnumero1').val(),$('#txtnumero2').val(),$('#btnrestar').val());">
    <br>
    <input type="button" name="btnmultiplicar" id="btnmultiplicar" value="x"
    onclick="proceso($('#txtnumero1').val(),$('#txtnumero2').val(),$('#btnmultiplicar').val());">
    <br>
    <input type="button" name="btndivision" id="btndivision" value="/"
    onclick="proceso($('#txtnumero1').val(),$('#txtnumero2').val(),$('#btndivision').val());">
    
</form>
<br>
<span id="resultado"></span>

<script src="jquery-3.4.1.js"></script>

        
    </body>
</html>