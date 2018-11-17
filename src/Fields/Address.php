<?php

namespace Davesweb\BackpackHelpers\Fields;

class Address extends Field
{
    public function make(bool $storeAsJson = false): array
    {
        $this->type = 'address';

        $merge = [];

        if ($storeAsJson) {
            $merge['store_as_json'] = true;
        }

        return parent::makeField() + $merge;
    }
}
