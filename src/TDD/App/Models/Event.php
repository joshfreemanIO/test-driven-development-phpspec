<?php

namespace TDD\App\Models;

class Event
{
    private $truthy;
    private $numeric;

    public function save(array $parameters = null)
    {
        foreach ($parameters as $key => $value) {
            $this->{$key} = $value;
        }

        if (is_bool($this->truthy) && is_numeric($this->numeric)) {
            return true;
        }

        return false;
    }


    public static function find($id)
    {
        return new self;
    }
}
