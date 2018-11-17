<?php

namespace Davesweb\BackpackHelpers\Fields;

class ColorPicker extends Field
{
    public function make(?array $options = null): array
    {
        $this->type = 'color_picker';

        $merge = [];

        if (null !== $options) {
            $merge['color_picker_options'] = $options;
        }

        return parent::makeField() + $merge;
    }
}
