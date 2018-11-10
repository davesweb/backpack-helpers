<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class MultiDimensionalArrayColumn extends Column
{
    public function make(?string $visibleKey = null): array
    {
        $this->type = 'multidimensional_array';

        $merge = [];

        if (null !== $visibleKey) {
            $merge['visible_key'] = $visibleKey;
        }

        return parent::makeField() + $merge;
    }
}
