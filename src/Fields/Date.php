<?php

namespace Davesweb\BackpackHelpers\Fields;

class Date extends Field
{
    public function make(): array
    {
        $this->type = 'date';

        return parent::makeField();
    }
}
