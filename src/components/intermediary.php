<?php

//Escreva uma função que busca um array de nomes (não classificados) para o nome "Bob" e retorna o local no array. Se Bob não estiver no array, retorna -1.
function findBob(array $arrayBlob){

   $posicao = array_search("Bob", $arrayBlob);
   $include = in_array("Bob", $arrayBlob);

   if($include) {
     echo $posicao;
   }else{
    echo "-1" ;
   }
    
}

print_r(findBob(["Bob", "Jimmy", "Layla"]))."<br></br>";

//Crie uma função que receba uma lista de números e retorne o segundo maior número.
function secondLargest(array $arrayNumber = [1, 2, 3, 4, 5]){

  $maiorNum = max(...$arrayNumber);
  $indice = array_search($maiorNum, $arrayNumber);

  if($indice !== false){
    $remove = array_splice($arrayNumber, $indice, 1);
  }

  return max(...$arrayNumber);
}

print_r(secondLargest([25, 143, 89, 13, 105]))."<br/>";

//Dados dois arrays inteiros exclusivos $a e $b, e um valor alvo inteiro $v, crie uma função para determinar se há um par de números que somam o valor alvo $v, onde um número vem de um array $a e o outro vem do segundo array $b. Retorna true se houver um par que some o valor alvo e false caso contrário.
function sumOfTwo(array $a, array $b, int $v){
  return;
  
}

print_r(sumOfTwo([1, 2, 3],[5, 8, 10], 6))."<br/>";