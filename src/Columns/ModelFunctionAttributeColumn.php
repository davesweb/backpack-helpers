<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class ModelFunctionAttributeColumn extends Column
{
    public function make(?string $functionName = null, ?string $attribute = null, ?int $limit = null): array
    {
        $this->type = 'model_function_attribute';

        $merge = [];

        if (null !== $functionName) {
            $merge['function_name'] = $functionName;
        }

        if (null !== $attribute) {
            $merge['attribute'] = $attribute;
        }

        if (null !== $limit) {
            $merge['limit'] = null;
        }

        return parent::makeField() + $merge;
    }
}
