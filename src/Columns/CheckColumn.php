<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class CheckColumn extends Column
{
    public function make(): array
    {
        $this->type = 'check';

        return parent::makeField();
    }
}
