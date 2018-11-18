<?php

namespace Davesweb\BackpackHelpers\Columns;

class VideoColumn extends Column
{
    public function make(): array
    {
        $this->type = 'video';

        return parent::makeField();
    }
}
