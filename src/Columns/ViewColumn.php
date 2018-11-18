<?php

namespace Davesweb\BackpackHelpers\Columns;

class ViewColumn extends Column
{
    public function make(string $view = null): array
    {
        $this->type = 'view';

        $merge = ['view' => $view];

        return parent::makeField() + $merge;
    }
}
