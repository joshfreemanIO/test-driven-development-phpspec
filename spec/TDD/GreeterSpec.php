<?php

namespace Spec\TDD;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreeterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TDD\Greeter');
    }

    function it_says_hello_world()
    {
        $this->helloWorld()->shouldReturn('Hello, World!');
    }

    function it_greets_individuals()
    {
        $this->hello('Somebody')->shouldReturn('Hello, Somebody!');
        $this->hello('Somebody Else')->shouldReturn('Hello, Somebody Else!');
    }
}
