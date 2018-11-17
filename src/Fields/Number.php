<?php

namespace Davesweb\BackpackHelpers\Fields;

class Number extends Field
{
    /**
     * @param int|string|null $step
     * @param int|null        $min
     * @param int|null        $max
     *
     * @return array
     */
    public function make($step = null, ?int $min = null, ?int $max = null): array
    {
        $this->type = 'number';

        $merge = [];

        if (null !== $step) {
            if (!isset($merge['attributes'])) {
                $merge['attributes'] = [];
            }

            $merge['attributes']['step'] = $step;
        }

        if (null !== $min) {
            if (!isset($merge['attributes'])) {
                $merge['attributes'] = [];
            }

            $merge['attributes']['min'] = $min;
        }

        if (null !== $max) {
            if (!isset($merge['attributes'])) {
                $merge['attributes'] = [];
            }

            $merge['attributes']['max'] = $max;
        }

        return parent::makeField() + $merge;
    }
}
