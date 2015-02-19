<?php

namespace TDD\App\Controllers;

class EventController
{
    public function create($creation_parameters = [])
    {
        $event = new \TDD\App\Models\Event;

        $validator = new \TDD\App\Validator;

        $rules = [
            'truthy' => 'is_bool',
            'numeric' => 'is_numeric'
        ];

        if ($validator->validate($creation_parameters, $rules) && $event->save($creation_parameters)) {
            return 'The event was successfully created';
        }

        return 'Your request is invalid';
    }

    public function update($id, $creation_parameters = [])
    {
        $event = \TDD\App\Models\Event::find($id);

        $validator = new \TDD\App\Validator;

        $rules = [
            'truthy' => 'is_bool',
            'numeric' => 'is_numeric'
        ];

        if ($validator->validate($creation_parameters, $rules) && $event->save($creation_parameters)) {
            return 'The event was successfully updated';
        }

        return 'Your request is invalid';
    }
}
