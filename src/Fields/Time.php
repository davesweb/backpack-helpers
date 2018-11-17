<?php

namespace Davesweb\BackpackHelpers\Fields;

class Time extends Field
{
    public function make(): array
    {
        $this->type = 'time';

        return parent::makeField();
    }
}
