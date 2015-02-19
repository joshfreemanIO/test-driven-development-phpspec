<?php

namespace Spec\TDD;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FibonacciSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TDD\Fibonacci');
    }

    function it_returns_a_fibanacci_sequence_size_of_1()
    {
        $this->generateSet(1)->shouldReturn([0]);
    }

    function it_returns_a_fibanacci_sequence_size_of_3()
    {
        $this->generateSet(3)->shouldReturn([0, 1, 1]);
    }

    function it_returns_a_fibanacci_sequence_size_of_11()
    {
        $this->generateSet(12)->shouldReturn([0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]);
    }


    function it_returns_a_fibanacci_sequence_size_of_7()
    {
        $this->generateSet(7)->shouldReturn([0, 1, 1, 2, 3, 5, 8]);
    }
}
