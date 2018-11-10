<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class RadioColumn extends Column
{
    public function make(array $options): array
    {
        $this->type = 'radio';

        $merge = ['options' => $options];

        return parent::makeField() + $merge;
    }
}
