<?php
echo "*-LISTA DE EXERCÍCIOS - INTRODUÇÃO AO PHP -* "; echo "<br>";
# 1. Faça um programa que leia um número inteiro e o imprima.
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "1. Faça um programa que leia um número inteiro e o imprima."; echo "<br>";
$n1 = 7;
echo " O número impresso é $n1";
echo "<br>";
# 2. Faça um programa que leia um número real e o imprima.
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "2. Faça um programa que leia um número real e o imprima."; echo "<br>";
$nReal = 7.5;
echo "Número real: $nReal";
echo "<br>";
# 3. Faça um programa que leia três valores inteiros e imprima a soma deles.
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "3. Faça um programa que leia três valores inteiros e imprima a soma deles."; echo "<br>";
$v1 = 2; $v2 = 4; $v3 = 6;
$soma3 = $v1 + $v2 + $v3;
echo "A soma dos três valores inteiros é $soma3";
echo "<br>";
/* 4. Façaum  programa  que  leia  uma  temperatura  emgraus  Celsius  e  apresente-a  convertida  em graus  Fahrenheit.
A  formula  de conversãoé:  F  =  C∗(9.0/5.0)+32.0,  sendo  F  a  temperatura  em Fahrenheit e C a temperatura em Celsius. */
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "4. Faça um  programa  que  leia  uma  temperatura  em graus  Celsius  e  apresente-a  convertida  em graus  Fahrenheit."; echo "<br>";
$celsius = 20;
$fahrenheit = $celsius*(9/5) + 32;
echo "A temperatura de $celsius Celsius convertida para Fahrenheit é: $fahrenheit";
echo "<br>";
/* 5. Faça um  programa  que  leia  uma  temperatura  em  graus  Fahrenheit  e  apresente-a  convertida em graus Celsius.
A formula de conversão é: C = 5.0 ∗(F −32.0)/9.0, sendo C a temperatura em Celsius e F a temperatura em Fahrenheit. */
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "5. Faça um  programa  que  leia  uma  temperatura  em  graus  Fahrenheit  e  apresente-a  convertida em graus Celsius."; echo "<br>";
$f = 68;
$c = 5 * ($f - 32) / 9;
echo "A temperatura de $f Fahrenheit convertida para Celsius é: $c";
echo "<br>";
# 6. Faça um programa que receba dois números e mostre qual deles é o maior.
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "6. Faça um programa que receba dois números e mostre qual deles é o maior."; echo "<br>";
$num1 = 10; $num2 = 15;
echo "Número 1 = $num1, Número 2 = $num2"; echo "<br>";
if ($num1 > $num2) {
    echo "O número 1 é o maior com o valor de $num1";
}elseif ($num2 > $num1){
    echo "O número 2 é o maior com o valor de $num2";
}elseif ($num1 == $num2){
    echo "Os números são iguais!";
}
echo "<br>";
/* 7. Faça um programa que leia um número caso seja positivo, calcule a raiz quadrada do número. 
Caso o número seja negativo, mostre uma mensagem dizendo que o número é invalido. */
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "7. Faça um programa que leia um número caso seja positivo, calcule a raiz quadrada do número. <br>
Caso o número seja negativo, mostre uma mensagem dizendo que o número é invalido."; echo "<br>";
$np = 9;
if ($np >= 0){
    echo "A raiz quadrada de $np é: ".sqrt($np);
} elseif ($np <= 0){
    echo "Número inválido!";
}
echo "<br>";
#8. Faça um programa que leia um número e, caso ele seja positivo, calcule e mostre: • O número digitado ao quadrado • A raiz quadrada do número digitado;
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "8. Faça um programa que leia um número e, caso ele seja positivo, calcule e mostre: <br>
• O número digitado ao quadrado <br>
• A raiz quadrada do número digitado;"; echo "<br>";
$n8 = 9;
if ($n8 >= 0){
    echo "O número digitado é $n8! A raiz do número é: ".sqrt($n8);
} elseif($n8 <= 0){
    echo "Sem resultados :(";
}
echo "<br>";
#9. Faça um programa que receba um número inteiro e verifique se este número é par ou ímpar.
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "9. Faça um programa que receba um número inteiro e verifique se este número é par ou ímpar."; echo "<br>";
$iorp = 7;
echo "Número: $iorp"; echo "<br>";
if (($iorp % 2) == 0){
    echo "O número é par!";
}elseif(($iorp % 2) == 1){
    echo "O número é impar!";
}
echo "<br>";
/* 10. Faça um  programa  que  receba  leia  um  inteiro  entre  1  e  7  e  imprima  o  dia  da  semana correspondente a este número.
 Isto e, domingo se 1, segunda-feira se 2, e assim por diante. */
echo "-----------XXXXXXXXX-----------"; echo "<br>";
echo "10. Faça um  programa  que  receba  leia  um  inteiro  entre  1  e  7  e  imprima  o  dia  da  semana correspondente a este número."; echo "<br>";
$semana = 1;
echo "Dia número $semana;";
echo"<br>";
if($semana == 1){
    echo "Hoje é domingo!";
}elseif($semana == 2){
    echo "Hoje é segunda!";
}elseif($semana == 3){
    echo "Hoje é terça!";
}elseif($semana == 4){
    echo "Hoje é quarta!";
}elseif($semana == 5){
    echo "Hoje é quinta!";
}elseif($semana == 6){
    echo "Hoje é sexta!";
}elseif($semana == 7){
    echo "Hoje é sabadoo!";
}else{
    echo "Dia não encontrado!";
}
echo "<br>";
echo "-----------FIM!-----------"; echo "<br>";
