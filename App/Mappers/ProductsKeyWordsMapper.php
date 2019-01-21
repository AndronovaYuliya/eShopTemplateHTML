<?php

namespace App\Mappers;

use Core\Database;

class ProductsKeyWordsMapper extends AbstractTableMapper
{
    //faker
    public static function addFakerData(): void
    {
        $sql = "INSERT INTO `products_key_words` (id_product,id_key_word,created_at, updated_at) VALUE (:id_product, :id_key_word, NOW(), NOW())";
        Database::addFakerData('fakerProductsKeyWords', $sql, 20);
    }

    public static function query(): array
    {
        $sql = "SELECT id, id_product,id_key_word, created_at, updated_at FROM `products_key_words`;";
        return Database::query($sql);
    }

    /**
     * @param string $byWhat
     * @param string $name
     */
    public static function getDataWhere(string $byWhat, string $name)
    {
        $sql = "SELECT id, id_product,id_key_word, created_at, updated_at FROM `products_key_words` WHERE $byWhat=$name;";
        return Database::query($sql);
    }

    protected static function addData(): void
    {
        // TODO: Implement addData() method.
    }
}