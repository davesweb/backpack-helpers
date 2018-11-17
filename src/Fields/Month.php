<?php

namespace Davesweb\BackpackHelpers\Fields;

class Month extends Field
{
    public function make(): array
    {
        $this->type = 'month';

        return parent::makeField();
    }
}
