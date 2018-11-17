<?php

namespace Davesweb\BackpackHelpers\Fields;

class Image extends Field
{
    public function make(bool $upload = true, bool $crop = true, int $aspectRation = 0, ?string $disk = null): array
    {
        $this->type = 'image';

        $merge = [
            'upload'        => $upload,
            'crop'          => $crop,
            'aspect_ration' => $aspectRation,
        ];

        if (null !== $disk) {
            $merge['disk'] = $disk;
        }

        return parent::makeField() + $merge;
    }
}
