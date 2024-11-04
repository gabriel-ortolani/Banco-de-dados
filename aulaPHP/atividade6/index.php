<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da semana</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="dia" placeholder="digite um numero de 1 a 7" require>
        <button type="submit">Enviar</button>
    </form> 
    <?php
        if(isset($_POST["dia"])){
            $dia = $_POST["dia"];

            switch ($dia) {
            case 1:
                echo "Domingo";
                break;

            case 2:
                echo "Segunda - feira";
                break;
        
            case 3:
                echo "Terça-feira";
                break;
            
            case 4:
                echo "Quarta-feira";
                break;   
          
            case 5:
                echo "Quinta-feira";
                break;
    
            case 6:
                echo "Sexta-feira";
                break;

            case 7:
                echo "Sabádo";
                break;

            default:
                echo "Escolha um número de 1 a 7";
                break;
            }
        } 
    ?>
</body>
</html>