<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de bebidas</title>
</head>
<body>
    <h1>Cardapio:</h1>
    <p>1. Refrigerante🥤 <br>2. Água🐳 <br> 3. Suco🧃</p>
    <form method="POST">
        <input type="text" name="esc" placeholder="digite um numero de 1 a 3 de acordo com sua escolha" require>
        <button type="submit">Enviar</button>
    </form> 
    <?php
        $agua = "R$ 2,00";
        $refrigerante = "R$ 4,00";
        $suco = "R$ 3,00";
        if (isset($_POST["esc"])){
            $esc = $_POST["esc"];
            switch ($esc) {
                case 1:
                    echo "Refrigerante<br>";
                    echo "preço: $refrigerante";
                break;

                case 2:
                    echo "Água<br>";
                    echo "preço: $agua";
                break;
            
                case 3:
                    echo "Suco<br>";
                    echo "preço: $suco";
                break;
            }
        }
    ?>
</body>
</html>