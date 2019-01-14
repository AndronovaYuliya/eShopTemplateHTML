<?php

namespace Components\Mappers;

use Components\Core\Database;

class CategoriesAttributesMapper extends AbstractTableMapper
{
    private static $_checkTable="SHOW TABLES LIKE 'categories_attributes'";

    //faker
    public static function addData(): void
    {
        $sql = "INSERT INTO `categories_attributes` (id_category, id_attribute, created_at, updated_at) VALUE (:id_category, :id_attribute, NOW(), NOW())";
        Database::addData('fakerCategoriesAttributes', $sql, 10);
    }

    public static function getData(): array
    {
        $sql = "SELECT id, id_category, id_attribute, created_at, updated_at FROM `categories_attributes`;";
        return Database::getData($sql, self::$_checkTable);
    }

    public static function getDataWhere(string $byWhat, string $name)
    {
        $sql = "SELECT id, id_category,id_attribute, created_at, updated_at FROM `categories_attributes` WHERE $byWhat=$name;";
        return Database::getData($sql, self::$_checkTable);
    }
}