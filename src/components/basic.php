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

//Crie uma função que retorne truese um inteiro é divisível por 5 e falsecaso contrário.
function divisibleByFive(int $num){
  return $num % 5 === 0 ? true : false;
}

echo divisibleByFive(5). "<br/>";

//Dadas duas strings, firstNamee lastName, retorna uma única string no formato "último, primeiro".
function concatName(string $first, string $last){
  return "$first $last";
  
}

echo concatName("Dev","web"). "<br/>";

//Crie uma função que receba um inteiro e retorne true se ele for divisível por 100, caso contrário retorne false.
function divisible(int $number){
  return $number % 100 === 0 ? true : false;
}

echo divisible(1). "<br/>";

//Escreva duas funções: 
// 1 - toInt(): Uma função para converter uma string em um inteiro.
// 2 - toStr(): Uma função para converter um inteiro em uma string.
function toInt(string $str){
  return intval($str);
  
}

echo (toInt("20")). "<br/>";

function toStr(int $number){
  return strval($number);

}

var_dump(toStr(6)). "<br/>";

//Escreva uma função para reverter uma matriz.
function reverse(array $arr){
  return array_reverse($arr);
  
}

print_r(reverse([1,2,3,4])). "<Br/>";