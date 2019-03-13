<?php

// 1) Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

$c = 3;

if ($c == 0) {
	echo "Valor igual a 0";
}

else if ($c > 0) {
	echo "Valor positivo";
}
else if ($c < 0) {
	echo "Valor negativo";
}

/* 2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex:
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.
*/

$x = 5;
$y = 0;
while ($y <= 10) {
	echo "<br>" . $x*$y;
	$y++;
}
//3) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. 

$b = 24;
	if ($b % 2 == 0) {
		echo "<br>" . "Este número é par";
	}
	else {
		echo "<br>" . "Este número é ímpar";
	}

//4) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. 

//5) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.

$a = 1;
$b = 7;

if ($a > $b) {
	echo "<br>" . "A maior que B";
}
else{
	echo "<br>" . "A menor que B";
}

//6) Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
//Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]

$notas = array (5, 10, 4);
$somaNotas = $notas[0]+$notas[1]+$notas[2];
$media = $somaNotas / 3;
	if ($notas >= 6)  {
		echo "<br>Aprovado com média " . $media;
	}
	else {
		echo "<br>Reprovado com média " . $media;
	}

// 7) Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.

$nome = "Pedro";
$idade = 19;

if ($idade >= 18) {
	echo "<br>" . $nome . " é maior de 18 anos e tem " . $idade . " anos";
}

else {
	echo "<br>" . $nome . " não é maior de 18 e tem " . $idade;
}

// 8) Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentado somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.

$d = 2;
$e = 19;
$result = $d + $e;

if ($result > 20) {
	$result = $result + 8;
	echo "<br>" . $result; 
}
else {
	$result = $result - 5;
	echo "<br>" . $result;
}

//9) Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.

$num = 25;

	if ($num % 10 == 0) {
		echo "<br> Este número é divisível por 10";
	}
	else if ($num % 5 == 0) {
		echo "<br> Este número é divisível por 5";
	}
	else if ($num % 2 == 0) {
		echo "<br> Este número é divisível por 2";
	}
	else {
		echo "<br> Este número não é divisível por 10. 5 e 2";
	}

//10) Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA

$n = "Joana";
$sex = "Feminino";
$id = "20";

if ($sex = "Feminino" && $id < 25) {
	echo "<br> ACEITA";
}
else {
	echo $n . "<br> NÃO ACEITA";
}

?>