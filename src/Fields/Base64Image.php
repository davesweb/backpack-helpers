<?php

namespace Davesweb\BackpackHelpers\Fields;

class Base64Image extends Field
{
    public function make(
        ?string $filename = null,
        ?int $aspectRation = 0,
        ?bool $crop = null,
        ?string $src = null
    ): array {
        $this->type = 'base64_image';

        $merge = [];

        if (null !== $filename) {
            $merge['filename'] = $filename;
        }

        if (null !== $aspectRation) {
            $merge['aspect_ration'] = $aspectRation;
        }

        if (null !== $crop) {
            $merge['crop'] = $crop;
        }

        if (null !== $src) {
            $merge['src'] = $src;
        }

        return parent::makeField() + $merge;
    }
}
