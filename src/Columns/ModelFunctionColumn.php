<?php

namespace Davesweb\BackpackHelpers\Columns;

class ModelFunctionColumn extends Column
{
    public function make(?string $functionName = null, ?int $limit = null): array
    {
        $this->type = 'model_function';

        $merge = [];

        if (null !== $functionName) {
            $merge['function_name'] = $functionName;
        }

        if (null !== $limit) {
            $merge['limit'] = $limit;
        }

        return parent::makeField() + $merge;
    }
}
