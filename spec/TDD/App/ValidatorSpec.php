<?php

namespace Spec\TDD\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ValidatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TDD\App\Validator');
    }

    function it_validates_with_valid_parameters()
    {
        $paramters = [
            'numeric' => 2.11,
            'boolean' => false,
            'array'   => ['a', 'b', 'c']
        ];

        $rules = [
            'numeric' => 'is_numeric',
            'boolean' => 'is_bool',
            'array'   => 'is_array'
        ];

        $this->validate($paramters, $rules)->shouldReturn(true);
    }

    function it_does_not_validate_with_imvalid_parameters()
    {
        $paramters = [
            'numeric' => 2.11,
            'boolean' => 'whoops',
            'array'   => ['a', 'b', 'c']
        ];

        $rules = [
            'numeric' => 'is_numeric',
            'boolean' => 'is_bool',
            'array'   => 'is_array'
        ];

        $this->validate($paramters, $rules)->shouldReturn(false);
    }
}
