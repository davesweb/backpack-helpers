<?php

namespace Davesweb\BackpackHelpers\Fields;

class Url extends Field
{
    public function make(): array
    {
        $this->type = 'url';

        return parent::makeField();
    }
}
