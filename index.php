<?php

function firstFunction(string $param): never
{
    echo $param;
    secondFunction();
}

function secondFunction(): never
{
    throw new Exception("Mensagem");
}

try {
    firstFunction("teste");
} catch (Exception $e) {
    echo $e->getMessage();
}