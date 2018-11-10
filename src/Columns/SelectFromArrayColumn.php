<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class SelectFromArrayColumn extends Column
{
    public function make(array $options): array
    {
        $this->type = 'select_from_array';

        $merge = ['options' => $options];

        return parent::makeField() + $merge;
    }
}
