<?php

$valor01;
$valor02;

function soma($valor01,$valor02){
    return  $valor01+$valor02;   
}

function quadrado($valor01){
    return  pow($valor01, 2);
}

echo soma(2,10);
echo " e ";
echo quadrado(2);

