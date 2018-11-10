<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

use Closure;

class ClosureColumn extends Column
{
    public function make(Closure $closure): array
    {
        $this->type = 'closure';

        $merge = ['function' => $closure];

        return parent::makeField() + $merge;
    }
}
