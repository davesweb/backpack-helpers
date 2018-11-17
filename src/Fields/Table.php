<?php

namespace Davesweb\BackpackHelpers\Fields;

class Table extends Field
{
    public function make(string $entitySingular, array $columns, int $min, int $max): array
    {
        $this->type = 'table';

        $merge = [
            'entity_singular' => $entitySingular,
            'columns'         => $columns,
            'min'             => $min,
            'max'             => $max,
        ];

        return parent::makeField() + $merge;
    }
}
