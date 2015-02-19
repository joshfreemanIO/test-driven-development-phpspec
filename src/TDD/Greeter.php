<?php

namespace TDD;

class Greeter
{

    public function helloWorld()
    {
        return 'Hello, World!';
    }

    public function hello($name)
    {
        return "Hello, {$name}!";
    }
}
