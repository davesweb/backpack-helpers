<?php

namespace Davesweb\BackpackHelpers\Fields;

class WYSIWYG extends Field
{
    public function make(): array
    {
        $this->type = 'wysiwyg';

        return parent::makeField();
    }
}
