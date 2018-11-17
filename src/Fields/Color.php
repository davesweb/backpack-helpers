<?php

namespace Davesweb\BackpackHelpers\Fields;

class Color extends Field
{
    public function make(): array
    {
        $this->type = 'color';

        return parent::makeField();
    }
}
