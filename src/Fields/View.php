<?php

namespace Davesweb\BackpackHelpers\Fields;

class View extends Field
{
    public function make(string $view): array
    {
        $this->type = 'view';

        return parent::makeField() + ['view' => $view];
    }
}
