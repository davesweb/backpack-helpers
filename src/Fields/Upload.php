<?php

namespace Davesweb\BackpackHelpers\Fields;

class Upload extends Field
{
    public function make(?string $disk = null): array
    {
        $this->type = 'upload';

        $merge = [];

        $merge['upload'] = true;

        if (null !== $disk) {
            $merge['disk'] = $disk;
        }

        return parent::makeField() + $merge;
    }
}
