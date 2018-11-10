<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class BooleanColumn extends Column
{
    public function make(?array $options = null): array
    {
        $this->type = 'boolean';

        $merge = [];

        if (null !== $options) {
            $merge['options'] = $options;
        }

        return parent::makeField() + $merge;
    }
}
