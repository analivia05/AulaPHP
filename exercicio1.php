<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="Enviar" method="POST" action="exercicio1.php">
    <h1> Exercicio de PHP </h1>

    <form action="">
        <p>
            Digite o nome do cliente <br>
            <input type="text" name="cliente">
</p>
<p>
    Escolha o sexo do cliente <br>
    <input type="radio" name="sexo" value="F"> Feminino <br>
    <input type="radio" name="sexo" value="M"> Masculino <br>
</p>
<p>
        Digite o valor da compra <br>
        <input type="text" name="valorcompra">
</p>

<p>
    <input type="submit" name= "Enviar" value="Calcular">
</p>
</form>



<?php
     if(isset($_REQUEST["Enviar"])){
        $cliente = $_REQUEST["cliente"]; 
        $valorcompra = $_REQUEST["valorcompra"];
        $sexo = $_REQUEST["sexo"];
        

        
        

        echo "Nome do cliente: <b>$cliente</b><br>";
        echo "Sexo: <b>$sexo</b>";

                if ($sexo=="F"){
                    $desconto = $valorcompra * 20/100;
                    $total = $valorcompra - $desconto;
                
                echo "<br> O desconto será de 20%";
                echo "<br> O total será: $total ";
                }
                if ($sexo=="M"){
                    $desconto = $valorcompra * 5/100;
                    $total = $valorcompra - $desconto;
                
                echo "<br> O desconto será de 5%";
                echo "<br> O total será: $total ";
                }

     }


        ?>


</body>
</html>