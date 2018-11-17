<?php

namespace Davesweb\BackpackHelpers\Fields;

class PageOrLink extends Field
{
    public function make(string $pageModel): array
    {
        $this->type = 'page_or_link';

        return parent::makeField() + ['page_model' => $pageModel];
    }
}
