<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class SelectMultipleColumn extends Column
{
    public function make(?string $entity = null, ?string $attribute = null, ?string $model = null): array
    {
        $this->type = 'select_multiple';

        $merge = [];

        if (null !== $entity) {
            $merge['entity'] = $entity;
        }

        if (null !== $attribute) {
            $merge['attribute'] = $attribute;
        }

        if (null !== $model) {
            $merge['model'] = $model;
        }

        return parent::makeField() + $merge;
    }
}
