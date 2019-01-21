<?php

namespace App\Models;

use App\Mappers\CategoriesAttributesMapper;

class CategoriesAttributesModel extends AbstractTableModel
{
    public static function addFakerData(): void
    {
        CategoriesAttributesMapper::addFakerData();
    }

    public static function query(): array
    {
        return CategoriesAttributesMapper::query();
    }

    /**
     * @param string $byWhat
     * @param string $name
     */
    public static function getDataWhere(string $byWhat, string $name): array
    {
        return CategoriesAttributesMapper::getDataWhere($byWhat, $name);
    }
}