<?php

namespace Davesweb\BackpackHelpers\BackpackColumns;

abstract class Column
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $label;

    /**
     * @var string
     */
    protected $type = 'text';

    public function __construct(string $name, ?string $label = null)
    {
        $this->name  = $name;
        $this->label = $label ?: $this->makeLabel($name);
    }

    public function makeField(): array
    {
        return [
            'name'  => $this->name,
            'label' => $this->label,
            'type'  => $this->type,
        ];
    }

    private function makeLabel(string $name): string
    {
        $value = ucwords(strtolower($name));

        if (!ctype_lower($name)) {
            $name = preg_replace('/\s+/u', '', ucwords($name));

            $value = mb_strtolower(preg_replace('/(.)(?=[A-Z])/u', '$1' . ' ', $name), 'UTF-8');
        }

        return $value;
    }
}
