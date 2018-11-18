<?php

namespace Davesweb\BackpackHelpers\Columns;

class DateTimeColumn extends Column
{
    public function make(?string $format = null): array
    {
        $this->type = 'datetime';

        $merge = [];

        if (null !== $format) {
            $merge['format'] = $format;
        }

        return parent::makeField() + $merge;
    }
}
