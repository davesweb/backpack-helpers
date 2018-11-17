<?php

namespace Davesweb\BackpackHelpers\Fields;

class Select extends Field
{
    public function make(string $entity, string $attribute, string $model): array
    {
        $this->type = 'select';

        $merge = [
            'entity'    => $entity,
            'attribute' => $attribute,
            'model'     => $model,
        ];

        return parent::makeField() + $merge;
    }
}
