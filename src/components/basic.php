<?php

// Somar dos inteiros..
function somar(int $n1, int $n2){
    return $n1 + $n2;
}

echo somar(10,70). "<br/>";

// Incrementa + 1
function addition(int $number){
    return $number + 1;
}

echo addition(5). "<br/>";

// Coverte minutos em segundos..
function convert(int $minutos = 1){
  return $minutos * 60;
}

echo convert(5). "<br/>";

// área de um triângulo..
function triArea(int $altura, int $largura){
  return $altura * $largura / 2;
}

echo triArea(3,2). "<br/>";

//retorne a string "something"unida com um espaço " " e o argumento fornecido $name.
function giveMeSomething(string $name){
  return $name. " " . "something";
}

echo giveMeSomething("Luigi"). "<br/>";

//Crie uma função que receba um array contendo apenas números e retorne o primeiro elemento.
function getFirstValue(array $matrix){
  return $matrix[0];
}

echo getFirstValue([1,2,3,4,5]). "<br/>";

//Escreva uma função que converta hoursem segundos.
function howManySeconds(int $horas){
  $segundos = 60;
  $minuto = 60 * $segundos;

  return $minuto * $horas;
};

echo howManySeconds(10). "<br/>";