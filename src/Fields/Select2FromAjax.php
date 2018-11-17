<?php

namespace Davesweb\BackpackHelpers\Fields;

class Select2FromAjax extends Field
{
    public function make(
        string $entity,
        string $attribute,
        string $model,
        string $dataSource,
        string $placeholder,
        int $minimumInputLength = 3
    ): array {
        $this->type = 'select2_from_ajax';

        $merge = [
            'entity'               => $entity,
            'attribute'            => $attribute,
            'model'                => $model,
            'data_source'          => $dataSource,
            'placeholder'          => $placeholder,
            'minimum_input_length' => $minimumInputLength,
        ];

        return parent::makeField() + $merge;
    }
}
