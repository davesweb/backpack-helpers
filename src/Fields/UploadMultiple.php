<?php

namespace Davesweb\BackpackHelpers\Fields;

class UploadMultiple extends Field
{
    public function make(?string $disk = null): array
    {
        $this->type = 'upload_multiple';

        $merge = [];

        $merge['upload'] = true;

        if (null !== $disk) {
            $merge['disk'] = $disk;
        }

        return parent::makeField() + $merge;
    }
}
