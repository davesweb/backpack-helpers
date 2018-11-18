<?php

namespace Davesweb\BackpackHelpers\Columns;

class ArrayCountColumn extends Column
{
    public function make(?string $suffix = null): array
    {
        $this->type = 'array_count';

        $merge = [];

        if (null !== $suffix) {
            $merge['suffix'] = $suffix;
        }

        return parent::makeField() + $merge;
    }
}
