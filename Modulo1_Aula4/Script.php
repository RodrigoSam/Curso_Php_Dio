<?php

$categorias = ["infantil","adolescente","adulto","idoso"];


$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome))
{
 echo "O Campo nome deve ser preenchido";
 return;
}

if (strlen($nome)<2)
{
    echo"O nome deve possuir no mínimo dois caracteres";
    return;
}

if (strlen($nome)>=40)
{
    echo "O nome deve possuir no max 40 caracteres";
    return;
}

if (empty($idade))
{
    echo "Insira um número";
    return;
}

if (!is_numeric($idade))
{
    echo "Insira um número";
    return;
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