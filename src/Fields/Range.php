<?php

namespace Davesweb\BackpackHelpers\Fields;

class Range extends Field
{
    public function make(): array
    {
        $this->type = 'range';

        return parent::makeField();
    }
}
