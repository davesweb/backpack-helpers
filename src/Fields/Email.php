<?php

namespace Davesweb\BackpackHelpers\Fields;

class Email extends Field
{
    public function make(): array
    {
        $this->type = 'email';

        return parent::makeField();
    }
}
