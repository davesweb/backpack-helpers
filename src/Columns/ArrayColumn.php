<?php

namespace Davesweb\BackpackHelpers\Columns;

class ArrayColumn extends Column
{
    public function make(): array
    {
        $this->type = 'array';

        return parent::makeField();
    }
}
