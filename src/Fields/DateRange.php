<?php

namespace Davesweb\BackpackHelpers\Fields;

class DateRange extends Field
{
    public function make(
        string $startName,
        string $endName,
        ?string $format = null,
        ?string $startDefault = null,
        ?string $endDefault = null,
        ?bool $timePicker = false
    ): array {
        $this->type = 'date_range';

        $merge = [
            'start_name'         => $startName,
            'end_name'           => $endName,
            'date_range_options' => [
                'timePicker' => $timePicker,
            ],
        ];

        if (null !== $format) {
            $merge['date_range_options']['locale'] = ['format' => $format];
        }

        if (null !== $startDefault) {
            $merge['start_default'] = $startDefault;
        }

        if (null !== $endDefault) {
            $merge['end_default'] = $endDefault;
        }

        return parent::makeField() + $merge;
    }
}
