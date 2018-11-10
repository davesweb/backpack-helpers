<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class ArrayColumn extends Column
{
    public function make(): array
    {
        $this->type = 'array';

        return parent::makeField();
    }
}
