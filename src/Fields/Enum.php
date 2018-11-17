<?php

namespace Davesweb\BackpackHelpers\Fields;

class Enum extends Field
{
    public function make(): array
    {
        $this->type = 'enum';

        return parent::makeField();
    }
}
