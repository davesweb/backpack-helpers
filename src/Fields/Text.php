<?php

namespace Davesweb\BackpackHelpers\Fields;

class Text extends Field
{
    public function make(): array
    {
        $this->type = 'text';

        return parent::makeField();
    }
}
