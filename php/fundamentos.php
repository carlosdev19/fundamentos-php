<?php

//Estrutura do PHP

//COMENTÁRIO EM LINHA
/*
*COMENTÁRIO EM BLOCO
*/

echo"Olá mundo!";

//TIPOS DE DADOS
//String tioSAM;

/**
 * Para declarar uma variavel em pHp
 * devemos utilizar o sinal d e $
 */

 $nome= "Carlos"; //String
 $idade=20; //inteiro
 $altura=1.70; //double
 $peso=50.00; //double
 $isVacinado = false; //boleano

 echo "Nome: $nome
 Idade: $idade
 Altura: $altura
 Peso: $peso
 Vacinado: $isVacinado 
 ";

if ($idade >= 18){
    echo "$nome, é maior de idade e possui $idade anos";
}else{
    echo "$nome, é menor de idade e possui $idade anos";
}

echo "<br> \n Laços <br> \n";

for($i=1; $i <= 100; $i++){
    if($i %2 == 0){
        echo "$i par <br> \n";
    }
}

?>