<?php

namespace Davesweb\BackpackHelpers\Fields;

class TextArea extends Field
{
    public function make(): array
    {
        $this->type = 'textarea';

        return parent::makeField();
    }
}
