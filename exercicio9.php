<?php

$alunos = [
   [
    "nome" => "Pedro",
    "sobrenome" => "Medeiros",
    "idade" => 23,
    "sexo" => "M",
    "telefone" => "(11) 91111-1111"
   ],
   [
    "nome" => "Nicolas",
    "sobrenome" => "Santos",
    "idade" => 23,
    "sexo" => "M",
    "telefone" => "(11) 91111-1111"
   ],
   [
    "nome" => "Fábio",
    "sobrenome" => "Oliveira",
    "idade" => 15,
    "sexo" => "M",
    "telefone" => "(11) 91111-1111"
   ],
   [
    "nome" => "Marcos",
    "sobrenome" => "Silva",
    "idade" => 35,
    "sexo" => "M",
    "telefone" => "(11) 91111-1111"
   ],
   [
    "nome" => "Eduardo",
    "sobrenome" => "Santana",
    "idade" => 43,
    "sexo" => "M",
    "telefone" => "(11) 91111-1111"
   ]
];  

?>

<!DOCTYPE html>
<html>
    <head>
    <title>página</title>
    </head>
    <body>
        <?php
//            for ($i=0; $i < count($alunos); $i++){
//               echo $alunos[$i]['nome']." " .$alunos[$i]['sobrenome'] ." ".$alunos[$i]['idade'] ."<br/>";
//            }
        ?>
         <table style="border: solid 1px black">
            <thead>
               <tr>
                  <td style="border: solid 1px red">Nome</td>
                  <td style="border: solid 1px red">Idade</td>
               </tr>
            </thead>
            <tbody>
               <?php 
                  for ($i=0; $i < count($alunos); $i++){
               ?> 
               <tr>
                  <td style="border: solid 1px black"> 
                     
                     <?= $alunos[$i]['nome']." " .$alunos[$i]['sobrenome']?>
                     
                  </td>
                  <td style="border: solid 1px black"> 
                     
                     <?= $alunos[$i]['idade'] ?>
                  
                  </td>
               </tr>
               <?php 
                  } 
               ?>
            </tbody>
         </table>

    </body>
</html>