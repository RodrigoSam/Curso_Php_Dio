<?php
    session_start();
?>

<!doctype html>
<html lang="Pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de inscrição</title>
</head>

<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
<form  action = "Script.php" method = "post">
    <?php
        $mensagenDeErro = isset($_SESSION["mensagem-de-erro"]) ? $_SESSION["mensagem-de-erro"] : "";
            if (!empty($mensagenDeErro))
            {
                unset($_SESSION["mensagem-de-erro"]);
                echo $mensagenDeErro;
            }


    ?>
    <p>Insira seu nome:  <input type="text" name = "nome"/></p>
    <p>Insira sua idade:  <input type="text" name = "idade"/></p>
    <p><input type="submit" value="Enviar dados do competidor para análise"/></p>
</form>

</body>
</html>
