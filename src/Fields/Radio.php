<?php

namespace Davesweb\BackpackHelpers\Fields;

class Radio extends Field
{
    public function make(array $options, bool $inline = false): array
    {
        $this->type = 'radio';

        $merge = [
            'options' => $options,
            'inline'  => $inline,
        ];

        return parent::makeField() + $merge;
    }
}
