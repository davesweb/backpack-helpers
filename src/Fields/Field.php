<?php

namespace Davesweb\BackpackHelpers\Fields;

class Field
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

    /**
     * @var string|null
     */
    protected $prefix;

    /**
     * @var string|null
     */
    protected $suffix;

    /**
     * @var string|null
     */
    protected $defaultValue;

    /**
     * @var string|null
     */
    protected $hint;

    /**
     * @var string[]|null
     */
    protected $wrapperAttributes;

    /**
     * @var string[]|null
     */
    protected $attributes;

    /**
     * @var string|null
     */
    protected $storeIn;

    public function __construct(
        string $name,
        ?string $label = null,
        ?string $prefix = null,
        ?string $suffix = null,
        ?string $defaultValue = null,
        ?string $hint = null,
        ?array $attributes = null,
        ?array $wrapperAttributes = null
    ) {
        $this->name  = $name;
        $this->label = $label ?: $this->makeLabel($name);

        $this->prefix            = $prefix;
        $this->suffix            = $suffix;
        $this->defaultValue      = $defaultValue;
        $this->hint              = $hint;
        $this->attributes        = $attributes;
        $this->wrapperAttributes = $wrapperAttributes;

        $this->storeIn = null;
    }

    public function prefix(string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function suffix(string $suffix): self
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function defaultValue(string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    public function hint(string $hint): self
    {
        $this->hint = $hint;

        return $this;
    }

    public function attributes(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function wrapperAttributes(array $attributes): self
    {
        $this->wrapperAttributes = $attributes;

        return $this;
    }

    public function isFake(string $storeIn): self
    {
        $this->storeIn = $storeIn;

        return $this;
    }

    public function makeField(): array
    {
        $fieldArray = [
            'name'  => $this->name,
            'label' => $this->label,
            'type'  => $this->type,
        ];

        if (null !== $this->prefix) {
            $fieldArray['prefix'] = $this->prefix;
        }

        if (null !== $this->suffix) {
            $fieldArray['suffix'] = $this->suffix;
        }

        if (null !== $this->defaultValue) {
            $fieldArray['default'] = $this->defaultValue;
        }

        if (null !== $this->hint) {
            $fieldArray['hint'] = $this->hint;
        }

        if (null !== $this->attributes) {
            $fieldArray['attributes'] = $this->attributes;
        }

        if (null !== $this->wrapperAttributes) {
            $fieldArray['wrapperAttributes'] = $this->wrapperAttributes;
        }

        if (null !== $this->storeIn) {
            $fieldArray['fake']     = true;
            $fieldArray['store_in'] = $this->storeIn;
        }

        return $fieldArray;
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
