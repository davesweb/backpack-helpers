<?php

namespace Davesweb\BackpackHelpers\Columns;

class DateColumn extends Column
{
    public function make(?string $format = null): array
    {
        $this->type = 'date';

        $merge = [];

        if (null !== $format) {
            $merge['format'] = $format;
        }

        return parent::makeField() + $merge;
    }
}
