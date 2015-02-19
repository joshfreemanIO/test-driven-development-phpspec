<?php

namespace Spec\TDD\App\Models;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EventSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TDD\App\Models\Event');
    }

    function it_saves_if_valid()
    {
        $this->save(['truthy' => false, 'numeric' => '2'])->shouldReturn(true);
    }

    function it_does_not_save_if_valid()
    {
        $this->save([])->shouldReturn(false);
    }

    function it_finds_itself()
    {
        $this::find(1)->shouldHaveType($this);
    }
}
