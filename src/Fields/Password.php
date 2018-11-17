<?php

namespace Davesweb\BackpackHelpers\Fields;

class Password extends Field
{
    public function make(): array
    {
        $this->type = 'password';

        return parent::makeField();
    }
}
