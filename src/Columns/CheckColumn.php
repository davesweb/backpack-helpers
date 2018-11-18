<?php

namespace Davesweb\BackpackHelpers\Columns;

class CheckColumn extends Column
{
    public function make(): array
    {
        $this->type = 'check';

        return parent::makeField();
    }
}
