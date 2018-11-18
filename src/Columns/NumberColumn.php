<?php

namespace Davesweb\BackpackHelpers\Columns;

class NumberColumn extends Column
{
    public function make(?string $prefix = null, ?string $suffix = null, ?int $decimals = 0): array
    {
        $this->type = 'number';

        $merge = [];

        if (null !== $prefix) {
            $merge['prefix'] = $prefix;
        }

        if (null !== $suffix) {
            $merge['suffix'] = $suffix;
        }

        if (null !== $decimals) {
            $merge['decimals'] = $decimals;
        }

        return parent::makeField() + $merge;
    }
}
