<?php

namespace Davesweb\BackpackHelpers\Fields;

class Week extends Field
{
    public function make(): array
    {
        $this->type = 'week';

        return parent::makeField();
    }
}
