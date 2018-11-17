<?php

namespace Davesweb\BackpackHelpers\Fields;

class Hidden extends Field
{
    public function make(): array
    {
        $this->type = 'hidden';

        return parent::makeField();
    }
}
