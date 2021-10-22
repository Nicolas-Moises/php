<?php 

$valor = 0;
$total = 0;

if(isset($_GET['botao'])){
    $valor = $_GET['valor'];
    $porc = 10.0;

    $desctotal = ($valor*$porc)/100;

    $total = $valor - $desctotal;

    echo 'o valor já com desconto é de: R$ '.number_format ($total, 2 , ',','.') ."<br>";
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Teste</title>
    </head>
    <body>
        <h1>DIGITE O VALOR</h1>
        <form method="GET" action="">
            <input type="number" name="valor" ><br/>
            <input type="submit" value="enviar" name="botao">
        </form>
    </body>
</html>