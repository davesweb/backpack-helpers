<?php

namespace Davesweb\BackpackHelpers\Columns;

class TableColumn extends Column
{
    public function make(array $columns): array
    {
        $this->type = 'table';

        $merge = ['columns' => $columns];

        return parent::makeField() + $merge;
    }
}
