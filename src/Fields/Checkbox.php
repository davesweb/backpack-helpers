<?php

namespace Davesweb\BackpackHelpers\Fields;

class Checkbox extends Field
{
    public function make(): array
    {
        $this->type = 'checkbox';

        return parent::makeField();
    }
}
