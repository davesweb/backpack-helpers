<?php

namespace Davesweb\BackpackHelpers\Fields;

class DateTime extends Field
{
    public function make(): array
    {
        $this->type = 'datetime';

        return parent::makeField();
    }
}
