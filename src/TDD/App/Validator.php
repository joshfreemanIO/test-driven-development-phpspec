<?php

namespace TDD\App;

class Validator
{
    public function validate($parameters, $rules)
    {
        foreach ($rules as $key => $rule) {
            if (isset($parameters[$key]) && !call_user_func($rule, $parameters[$key])) {
                return false;
            }
        }

        return true;
    }
}
