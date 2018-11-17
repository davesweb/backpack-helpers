<?php

namespace Davesweb\BackpackHelpers\Fields;

class CKEditor extends Field
{
    public function make(?array $plugins = null, ?array $options = null): array
    {
        $this->type = 'ckeditor';

        $merge = [];

        if (null === $plugins) {
            $merge['extra_plugins'] = $plugins;
        }

        if (null !== $options) {
            $merge['options'] = $options;
        }

        return parent::makeField() + $merge;
    }
}
