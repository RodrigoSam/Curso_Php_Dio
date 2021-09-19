<?php

$categorias = ["infantil","adolescente","adulto","idoso"];

//print_r($categorias);

$nome = "Rodrigo";
$idade = 4;
//var_dump($nome,$idade);

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