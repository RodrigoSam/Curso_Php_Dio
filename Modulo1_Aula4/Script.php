<?php
    session_start();

$categorias = ["infantil","adolescente","adulto","idoso"];


$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome))
{
    $_SESSION ["mensagem-de-erro"] = "O Campo nome deve ser preenchido";
    header("location: index.php");
}

if (strlen($nome)<2)
{
    $_SESSION ["mensagem-de-erro"] = "O nome deve possuir no mínimo dois caracteres";
    header("location: index.php");
}

if (strlen($nome)>=40)
{
    $_SESSION ["mensagem-de-erro"] = "O nome deve possuir no max 40 caracteres";
    header("location: index.php");
}

if (empty($idade))
{
    $_SESSION ["mensagem-de-erro"] = "Insira um número";
    header("location: index.php");

}

if (!is_numeric($idade))
{
    $_SESSION ["mensagem-de-erro"] = "Insira um número";
    header("location: index.php");
}

if($idade >= 6 && $idade <=12)
{
    for($i = 0; $i < count($categorias);$i++) {
        if ($categorias[$i] == "infantil")
        echo("A categoria do nadador " . $nome . " é " . $categorias[$i]);
    }
}
else if($idade > 12 && $idade < 18)
{
    for($i = 0; $i < count($categorias);$i++)
    {
        if ($categorias[$i] == "adolescente")
        echo("A categoria do nadador  " . $nome . " é " . $categorias[$i]);

    }
}
else if($idade >= 18 && $idade < 65)
{
    for($i = 0; $i < count($categorias);$i++)
    {
        if ($categorias [$i] == "adulto")
        echo("A categoria do nadador " .$nome. " é " . $categorias[$i]);
    }
}
else if ($idade >= 65) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == "idoso")
            echo("A categoria do nadador " . $nome . " é " . $categorias[$i]);
    }
}
else {
    echo"Não se enquadra em nenhuma categoria!";
}