<?php

namespace Davesweb\BackpackHelpers\Fields;

class DateTimePicker extends Field
{
    public function make(
        ?string $format = null,
        ?string $language = null,
        ?bool $allowsNull = null,
        ?string $default = null
    ): array {
        $this->type = 'datetime_picker';

        $merge = [];

        if (null !== $format) {
            if (!isset($merge['datetime_picker_options'])) {
                $merge['datetime_picker_options'] = [];
            }

            $merge['datetime_picker_options']['format'] = $format;
        }

        if (null !== $language) {
            if (!isset($merge['datetime_picker_options'])) {
                $merge['datetime_picker_options'] = [];
            }

            $merge['datetime_picker_options']['language'] = $language;
        }

        if (null !== $allowsNull) {
            $merge['allows_null'] = $allowsNull;
        }

        if (null !== $default) {
            $merge['default'] = $default;
        }

        return parent::makeField();
    }
}
