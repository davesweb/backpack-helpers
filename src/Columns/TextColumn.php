<?php

namespace Davesweb\BackpackHelpers\Columns;

class TextColumn extends Column
{
    public function make(?string $prefix = null, ?string $suffix = null, ?int $limit = null): array
    {
        $this->type = 'text';

        $merge = [];

        if (null !== $prefix) {
            $merge['prefix'] = $prefix;
        }

        if (null !== $suffix) {
            $merge['suffix'] = $suffix;
        }

        if (null !== $limit) {
            $merge['limit'] = $limit;
        }

        return parent::makeField() + $merge;
    }
}
