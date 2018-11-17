<?php

namespace Davesweb\BackpackHelpers\Fields;

class Video extends Field
{
    public function make(): array
    {
        $this->type = 'video';

        return parent::makeField();
    }
}
