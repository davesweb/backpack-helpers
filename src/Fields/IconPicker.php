<?php

namespace Davesweb\BackpackHelpers\Fields;

use UnexpectedValueException;

class IconPicker extends Field
{
    /**
     * @var array
     */
    private const SUPPORTED_ICON_SETS = [
        'fontawesome',
        'glyphicon',
        'ionicon',
        'weathericon',
        'mapicon',
        'octicon',
        'typicon',
        'elusiveicon',
        'materialdesign',
    ];

    /**
     * @param string $iconSet
     *
     * @throws UnexpectedValueException when the given icon set is not supported
     *
     * @return array
     */
    public function make(string $iconSet): array
    {
        $this->type = 'icon_picker';

        $this->assertValidSet($iconSet);

        $merge = [];

        $merge['iconset'] = $iconSet;

        return parent::makeField() + $merge;
    }

    /**
     * @param string $iconSet
     *
     * @throws UnexpectedValueException
     */
    private function assertValidSet(string $iconSet)
    {
        if (!in_array($iconSet, self::SUPPORTED_ICON_SETS, true)) {
            throw new UnexpectedValueException(sprintf('Icon set [%s] is not supported', $iconSet));
        }
    }
}
