<?php

require_once 'main.php';


//Primeira chamada
$Livro1 = new Livro();
$Livro1->definirDados("três porquinhos" , "Joseph Jacobs" , 35.00);


$Livro1->informarDados();
$Livro1->aplicarDesconto(10);

echo "\nValor com 10% de desconto da Super Friday:\n";
$Livro1->informarDados();
<
//Segunda chamada 
$Livro2 = new Livro();
$Livro2->definirDados("O cortiço" , "Aluísio Azevedo" , 50.00);


$Livro2->informarDados();
$Livro2->aplicarDesconto(10);

echo "\nValor com 10% de desconto da Super Friday:\n";
$Livro2->informarDados();

//Terceira chamada
$Livro3 = new Livro();
$Livro3->definirDados("Memórias Póstomas de Bras Cubas" , "Machado de Assis" , 80.00);


$Livro3->informarDados();
$Livro3->aplicarDesconto(10);

echo "\nValor com 10% de desconto da Super Friday:\n";
$Livro3->informarDados();


//* Os objetos não se confundem porque cada um ocupa um endereço de memória distinto.
