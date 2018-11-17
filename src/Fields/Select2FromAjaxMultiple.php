<?php

namespace Davesweb\BackpackHelpers\Fields;

class Select2FromAjaxMultiple extends Field
{
    public function make(
        string $entity,
        string $attribute,
        string $model,
        string $dataSource,
        string $placeholder,
        int $minimumInputLength = 3,
        bool $pivot = true
    ): array {
        $this->type = 'select2_from_ajax_multiple';

        $merge = [
            'entity'               => $entity,
            'attribute'            => $attribute,
            'model'                => $model,
            'data_source'          => $dataSource,
            'placeholder'          => $placeholder,
            'minimum_input_length' => $minimumInputLength,
            'pivot'                => $pivot,
        ];

        return parent::makeField() + $merge;
    }
}
