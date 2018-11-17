<?php

namespace Davesweb\BackpackHelpers\Fields;

class SelectFromArray extends Field
{
    public function make(array $options, bool $allowsNull = false, ?string $defaultValue = null, bool $allowsMultiple = false): array
    {
        $this->type = 'select_from_array';

        $merge = [
            'options'         => $options,
            'allows_null'     => $allowsNull,
            'default'         => $defaultValue,
            'allows_multiple' => $allowsMultiple,
        ];

        return parent::makeField() + $merge;
    }
}
