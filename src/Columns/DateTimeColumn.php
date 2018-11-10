<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

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
