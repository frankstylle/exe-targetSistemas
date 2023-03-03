2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.



IMPORTANTE:

Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;

<?php

$termo1 = 0;
$termo2 = 1;
$termo3 = 0;

// valor padrao que sera testado
$valor = 55;

// percorre de 0 ate o valor da $valor somando numero anterior + atual e guarda na variavel $termo3
while ($valor > $termo3) {

    $termo3 = $termo1 + $termo2;
    $termo1 = $termo2;
    $termo2 = $termo3;

}
    // teste pra saber se começa com 0 ou 1 faz parte da sequencia 
    if ($valor == 0 || $valor == 1) {
        print 'O número faz parte da sequência de Fibonacci.';
        // teste se a $valor ta dentro da sequencia 
    } else if ($valor == $termo3) {
        print 'O número faz parte da sequência de Fibonacci.';
    } else {
        print 'O número digitado não faz parte da sequência de Fibonacci.';
    }

