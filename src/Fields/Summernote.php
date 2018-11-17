<?php

namespace Davesweb\BackpackHelpers\Fields;

class Summernote extends Field
{
    public function make(?array $options = []): array
    {
        $this->type = 'summernote';

        $merge = [];

        $merge['options'] = $options;

        return parent::makeField() + $merge;
    }
}
