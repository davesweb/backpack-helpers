<?php

namespace Davesweb\BackpackHelpers\Fields;

class Select2Multiple extends Field
{
    public function make(string $entity, string $attribute, string $model, bool $pivot = true, bool $selectAll): array
    {
        $this->type = 'select2_multiple';

        $merge = [
            'entity'     => $entity,
            'attribute'  => $attribute,
            'model'      => $model,
            'pivot'      => $pivot,
            'select_all' => $selectAll,
        ];

        return parent::makeField() + $merge;
    }
}
