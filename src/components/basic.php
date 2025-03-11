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

//Crie uma função que receba um número como único argumento e retorne truese ele for menor ou igual a zero, caso contrário retorne false.
function lessThanOrEqualToZero(int $number){
  $isNumber = $number <= 0 ? "true" : "false";
  
  return $isNumber;
}

print_r(lessThanOrEqualToZero(3). "<br/>");

// Neste desafio, um fazendeiro pede que você diga quantas pernas podem ser contadas entre todos os seus animais. 
function animals(int $chickens, int $cows, int $pigs){
  $chi = $chickens * 2;
  $co = $cows * 4;
  $pi = $pigs * 4;
  
  return $chi + $co + $pi;
}

echo animals(1, 2, 3). "<br/>";

// Crie uma função que retorne truese uma string estiver vazia e falsecaso contrário.
function isEmpty(string $str){
  $isString = strlen($str) === 0 ? true : false;
  
  return $isString;
  
}

echo isEmpty("a"). "<br/>";

// Crie uma função que receba a idade em anos e retorne a idade em dias.
function calcAge(int $idade){
  $ano = 365;

  return $idade * $ano;
  
}

echo calcAge(24). "<br/>";