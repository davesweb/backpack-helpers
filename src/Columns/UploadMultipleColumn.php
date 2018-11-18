<?php

namespace Davesweb\BackpackHelpers\Columns;

class UploadMultipleColumn extends Column
{
    public function make(?string $disk = null): array
    {
        $this->type = 'select_multiple';

        $merge = [];

        if (null !== $disk) {
            $merge['disk'] = $disk;
        }

        return parent::makeField() + $merge;
    }
}
