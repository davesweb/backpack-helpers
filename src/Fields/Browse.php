<?php

namespace Davesweb\BackpackHelpers\Fields;

class Browse extends Field
{
    public function make(): array
    {
        $this->type = 'browse';

        return parent::makeField();
    }
}
