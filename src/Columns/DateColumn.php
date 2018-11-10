<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

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
