<?php

namespace Davesweb\BackpackHelpers\Fields;

class CheckList extends Field
{
    public function make(string $entity, string $attribute, string $model, bool $pivot = true): array
    {
        $this->type = 'checklist';

        $merge = [
            'entity'    => $entity,
            'attribute' => $attribute,
            'model'     => $model,
            'pivot'     => $pivot,
        ];

        return parent::makeField() + $merge;
    }
}
