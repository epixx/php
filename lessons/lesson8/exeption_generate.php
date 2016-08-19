<?php

function genetareException()
{
    throw new Exception('Возникло мое исключительное исключение!');
}

try {
    genetareException();
} catch (Exception $e) {
    echo $e->getMessage();
}

echo 'А код тем самым временем и дальше выполняется...';
