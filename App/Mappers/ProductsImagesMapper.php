<?php

namespace App\Mappers;

use Core\Database;

class ProductsImagesMapper extends AbstractTableMapper
{
    public static function addFakerData(): void
    {
        $sql = "INSERT INTO `products_images` (id_galary, id_product, created_at, updated_at) VALUE (:id_galary, :id_product,NOW(), NOW())";
        Database::addFakerData('fakerProductsImages', $sql, 20);
    }

    public static function query(): array
    {
        $sql = "SELECT id, id_galary,id_product, created_at, updated_at FROM `products_images`;";
        return Database::query($sql);
    }

    /**
     * @param string $byWhat
     * @param string $name
     */
    public static function getDataWhere(string $byWhat, string $name)
    {
        $sql = "SELECT id, id_galary,id_product, created_at, updated_at FROM `products_images` WHERE $byWhat=$name;";
        return Database::query($sql);
    }

    protected static function addData(): void
    {
        // TODO: Implement addData() method.
    }
}