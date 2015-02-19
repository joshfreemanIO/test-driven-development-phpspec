<?php

namespace Spec\TDD\App\Controllers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EventControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TDD\App\Controllers\EventController');
    }

    function it_creates_a_record_unless_invalid()
    {
        $this->create()->shouldReturn('Your request is invalid');
    }

    function it_creates_a_record_if_valid()
    {
        $this->create(['truthy' => true, 'numeric' => 2.1])->shouldReturn('The event was successfully created');
    }

    function it_updates_a_record_unless_invalid()
    {
        $this->update(1)->shouldReturn('Your request is invalid');
    }

    function it_updates_a_record_if_valid()
    {
        $this->update(1, ['truthy' => true, 'numeric' => 2.1])->shouldReturn('The event was successfully updated');
    }
}
