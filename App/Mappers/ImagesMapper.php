<?php

namespace App\Mappers;

use Core\Database;

class ImagesMapper extends AbstractTableMapper
{
    public static function addFakerData(): void
    {
        $sql = "INSERT INTO `images` (file_name, created_at, updated_at) VALUE (:file_name, NOW(), NOW())";
        Database::addFakerData('fakerImages', $sql, 20);
    }

    public static function query(): array
    {
        $sql = "SELECT id, file_name,created_at, updated_at FROM `images`;";
        return Database::query($sql);
    }

    /**
     * @param string $byWhat
     * @param string $name
     */
    public static function getDataWhere(string $byWhat, string $name)
    {
        $sql = "SELECT id, file_name, created_at, updated_at FROM `images` WHERE $byWhat=$name;";
        return Database::query($sql);
    }

    protected static function addData(): void
    {
        // TODO: Implement addData() method.
    }
}