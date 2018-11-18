<?php

namespace Davesweb\BackpackHelpers\Columns;

use UnexpectedValueException;

class ColumnFactory
{
    /**
     * @param string      $columnType
     * @param string      $name
     * @param null|string $label
     *
     * @throws UnexpectedValueException
     *
     * @return Column
     */
    public function make(string $columnType, string $name, ?string $label = null): Column
    {
        $this->assertValidColumn($columnType);

        return new $columnType($name, $label);
    }

    /**
     * @param string $columnType
     *
     * @throws UnexpectedValueException
     */
    private function assertValidColumn(string $columnType)
    {
        if (!class_exists($columnType)) {
            throw new UnexpectedValueException(sprintf('Column type [%s] does not exist.', $columnType));
        }

        if (Column::class !== get_parent_class($columnType)) {
            throw new UnexpectedValueException(sprintf('Column type [%s] is not a valid column.', $columnType));
        }
    }
}
