<?php

namespace Davesweb\BackpackHelpers\Columns;

class RadioColumn extends Column
{
    public function make(array $options): array
    {
        $this->type = 'radio';

        $merge = ['options' => $options];

        return parent::makeField() + $merge;
    }
}
