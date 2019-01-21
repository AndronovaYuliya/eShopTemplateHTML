<?php

namespace App\Mappers;

use Core\Database;

class AttributesMapper extends AbstractTableMapper
{
    //faker
    public static function addFakerData(): void
    {
        $sql = "INSERT INTO `attributes` (title, created_at, updated_at) VALUE (:title, NOW(), NOW())";
        Database::addFakerData('fakerAttributes', $sql, 10);
    }

    public static function query(): array
    {
        $sql = "SELECT id, title, created_at, updated_at FROM `attributes`;";
        return Database::query($sql);
    }

    /**
     * @param string $byWhat
     * @param string $name
     */
    public static function getDataWhere(string $byWhat, string $name)
    {
        $sql = "SELECT id, title, created_at, updated_at FROM `attributes` WHERE $byWhat=$name;";
        return Database::query($sql);
    }

    protected static function addData(): void
    {
        // TODO: Implement addData() method.
    }
}