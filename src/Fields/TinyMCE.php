<?php

namespace Davesweb\BackpackHelpers\Fields;

class TinyMCE extends Field
{
    public function make(): array
    {
        $this->type = 'tinymce';

        return parent::makeField();
    }
}
