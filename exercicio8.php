<?php 
$a = 0;
$b = 0;
$x = 0;

if(isset($_POST['botao'])){
    $a = $_POST['valor1'];
    $b = $_POST['valor2']; 
    
    $x = $b;

    $b = $a;

    $a = $x;

    echo "INVERTENDO OS NÚMEROS: " .$a ." e ".$b;
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>página</title>
    </head>
    <body>
        
        <form method="POST" action="">
            <input type="number" name="valor1" ><h1>Primeiro número</h1><br/>
            <input type="number" name="valor2" ><h1>Segundo número</h1><br/>
            <input type="submit" value="enviar" name="botao">
        </form>
    </body>
</html>

