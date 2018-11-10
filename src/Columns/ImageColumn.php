<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class ImageColumn extends Column
{
    public function make(?string $prefix = null, ?string $width = null, ?string $height = null): array
    {
        $this->type = 'image';

        $merge = [];

        if (null !== $prefix) {
            $merge['prefix'] = $prefix;
        }

        if (null !== $width) {
            $merge['width'] = $width;
        }

        if (null !== $height) {
            $merge['height'] = $height;
        }

        return parent::makeField() + $merge;
    }
}
