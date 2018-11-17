<?php

namespace Davesweb\BackpackHelpers\Fields;

class CustomHTML extends Field
{
    public function make(string $value): array
    {
        $this->type = 'custom_html';

        return parent::makeField() + ['value' => $value];
    }
}
