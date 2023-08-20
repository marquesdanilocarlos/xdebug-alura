<?php

function firstFunction(string $param): never
{
    $variavel = 1;
    echo $variavel;
    echo $param;
    secondFunction();
}

function secondFunction(): never
{
    $variavel = 1;
    throw new Exception("Mensagem");
}


    firstFunction("teste");