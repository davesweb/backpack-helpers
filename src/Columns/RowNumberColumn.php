<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class RowNumberColumn extends Column
{
    public function make(bool $orderable, ?string $prefix = null, ?string $suffix = null): array
    {
        $this->type = 'row_number';

        $merge = ['orderable' => $orderable];

        if (null !== $prefix) {
            $merge['prefix'] = $prefix;
        }

        if (null !== $suffix) {
            $merge['suffix'] = null;
        }

        return parent::makeField() + $merge;
    }
}
