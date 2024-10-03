<?php


namespace Zaynasheff\Greetr;


class Greetr
{
    public function greet(String $sName): string
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}
