<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posso dirigir</title>
</head>
<body>
    <h1>verifique se você pode dirigir</h1>

    <p>Digite seua idade</p><form method="POST">
        <input type="text" name="idade" placeholder="digite o sua idade" require>
        <button type="submit">Enviar</button>
    </form> 

    <?php
        if (isset($_POST['idade'])) {
        // Convertendo para inteiro
        $idade = $_POST['idade'];

        if ($idade >= 18) {
            echo "<p> Pode dirigir </p>";
        } 
        else {
            echo "<p> Não pode dirigir </p>";
        }
    } else {
        echo "<p> Idade não foi informada. </p>";
    }
    ?>
</body>
</html>