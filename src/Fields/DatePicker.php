<?php

namespace Davesweb\BackpackHelpers\Fields;

class DatePicker extends Field
{
    public function make(bool $todayButton = true, ?string $format = null, ?string $language = null): array
    {
        $this->type = 'date_picker';

        $merge = [
            'date_picker_options' => [
                'todayBtn' => $todayButton,
            ],
        ];

        if (null !== $format) {
            $merge['date_picker_options']['format'] = $format;
        }

        if (null !== $language) {
            $merge['date_picker_options']['language'] = $language;
        }

        return parent::makeField() + $merge;
    }
}
