<?php

namespace App\Models;

use App\Mappers\ImagesMapper;

class ImagesModel extends AbstractTableModel
{
    public static function addFakerData(): void
    {
        ImagesMapper::addFakerData();
    }

    public static function query(): array
    {
        return ImagesMapper::query();
    }

    /**
     * @param string $byWhat
     * @param string $name
     */
    public static function getDataWhere(string $byWhat, string $name): array
    {
        return ImagesMapper::getDataWhere($byWhat, $name);
    }
}