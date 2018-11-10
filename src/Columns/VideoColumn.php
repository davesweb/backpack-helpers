<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

class VideoColumn extends Column
{
    public function make(): array
    {
        $this->type = 'video';

        return parent::makeField();
    }
}
