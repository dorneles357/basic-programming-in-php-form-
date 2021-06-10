<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'infantojuvenil';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) 
{
    echo "O nome não pode ser vazio!";
    return;
}
if (strlen($nome) < 3) 
{
    echo "O nome deve conter mais de três caracteres";
    return;
}
if (strlen($nome) > 15) 
{
    echo "O nome não pode ser muio extenso";
    return;
}
if (!is_numeric($idade)) {
    echo "informe um número para idade";
    return;
}
/*
var_dump($nome);
var_dump($idade);
return 0;
*/
if ($idade >= 6 && $idade <= 12) 
{
    for ($i=0; $i <= count($categorias); $i++) 
    { 
        if ($categorias[$i] == "infantil") 
        {
            echo "O competidor" .$nome. "está na categoria" .$categorias[$i];
        }
    }
}
elseif ($idade >= 13 && $idade <= 18) 
{
    for ($i=0; $i <= count($categorias); $i++)
    { 
        if ($categorias[$i] == 'infantojuvenil') 
        {
            echo "O competidor" .$nome. "está na categoria infantojuvenil";
        }
    }
}
else {
    for ($i=0; $i <= count($categorias); $i++)
    { 
        if ($categorias[$i] == 'adulto') 
        {
            echo "O competidor" .$nome. "está na categoria adulto";
        }
    }
}
