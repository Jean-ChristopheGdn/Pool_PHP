<?php

function my_division_modulo ($firstNumber, $operChar, $secondNumber)
{
    if (($operChar != '/' && $operChar != '%') || $secondNumber == 0)
    {
        throw new Exception ("The given arguments aren't good." . PHP_EOL);
    }

    if ($operChar == '/')
    {
        return ($firstNumber / $secondNumber);
    }

    if ($operChar == '%')
    {
        return ($firstNumber % $secondNumber);
    }
}