<?php

namespace Davesweb\BackpackHelpers\Columns;

class SelectFromArrayColumn extends Column
{
    public function make(array $options): array
    {
        $this->type = 'select_from_array';

        $merge = ['options' => $options];

        return parent::makeField() + $merge;
    }
}
