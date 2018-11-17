<?php

namespace Davesweb\BackpackHelpers\Fields;

class BrowseMultiple extends Field
{
    public function make(bool $multiSelect = true, ?array $mimeTypes = null): array
    {
        $this->type = 'browse_multiple';

        $merge = [
            'multiple' => $multiSelect,
        ];

        if (null !== $mimeTypes) {
            $merge['mime_types'] = $mimeTypes;
        }

        return parent::makeField() + $merge;
    }
}
