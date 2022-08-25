<?php
$nome = 'Victor Hugo'; //variável

echo "Olá $nome! <br>";

//Comentário de linha

#Comentário

/*
Comentário
de
bloco
*/

//DOCUMENTAÇÃO DO PHP FICA EM https://www.php.net
//////////////////////////////////////////////////////
//LOOPINGS

//FOR
for( $i = 0; $i < 10; $i ++){
    echo "Número da linha $i <br>";
}

//WHILE

$num = 1;

while($num<11){
    echo "Número da linha $i <br>";
    $num++;
}

//DO WHILE
$i = 0;
do{
    echo "Número da linha $i <br>";
    $i++;
}while( $i < 10);

//FIM LOOPINGS
///////////////////////////////////////////////////////

//IF
if( 5 > 10){
    echo "Cinco é maior que dez";
}

else{
    echo "Cinco não é maior que dez";
}

echo "<br>";

$diaSemana = 0;

switch($diaSemana){
    case 0;
        echo "Domingo";
        break;
    
    case 1;
        echo "Segunda";
        break;

    case 2;
        echo "Terça";
        break;

    case 3;
        echo "Quarta";
        break;

    case 4;
        echo "Quinta";
        break;

    case 5;
        echo "Sexta";
        break;

    case 6;
        echo "Sábado";
        break;

    default;
        echo "Número inválido";
}

//FIM CONDICIONAIS
