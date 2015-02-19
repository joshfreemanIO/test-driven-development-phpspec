<?php

namespace TDD;

class Fibonacci
{
    public function generateSet($set_length)
    {
        $fibanacci = [0, 1];

        for ($i = 0; $i < $set_length - 2; $i++) {
            $fibanacci[] = $fibanacci[$i+1] + $fibanacci[$i];
        }

        return array_slice($fibanacci, 0, $set_length);
    }
}
