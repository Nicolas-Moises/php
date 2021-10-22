<?php 

$valor = 0;
$convertido = 0;

if (isset($_GET['botao'])){
    $valor =  $_GET['valor'];
    $convertido = $valor * 5.51;
    
    if ($convertido != 0){
    echo "O VALOR EM DÓLAR É $ " .number_format ($convertido, 2 , ',','.') ."<br/>";
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
    <title>Document title</title>
    </head>
    <body>
        <h1>DIGITE O VALOR EM REAIS</h1>
        <form method="GET" action="">
            <input type="number" name="valor" ><br/>
            <input type="submit" value="enviar" name="botao">
        </form>
    </body>
</html>