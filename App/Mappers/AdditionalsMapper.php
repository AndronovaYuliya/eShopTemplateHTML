<?php

namespace App\Mappers;

use Core\Cache;
use Core\Database;

/**
 * Class AdditionalsMapper
 * @package App\Mappers
 */
class AdditionalsMapper
{
    /**
     * @return array
     */
    public static function query(): array
    {
        /* $cache = new Cache();
         $data = $cache->get('additionals');
         if (!$data) {*/
        $sql = "SELECT 
                        id
                        ,id_product
                        ,id_order
                        ,count
                        ,price
                        ,created_at
                        ,updated_at
                FROM `additionals`;";
        $data = Database::query($sql);
        /* $cache->set('additionals', $data);
     }*/
        return Database::query($sql);
    }

    /**
     * @param string $byWhat
     * @param string $name
     * @return array|mixed
     */
    public static function getDataWhere(string $byWhat, string $name)
    {
        $sql = "SELECT 
                        id
                        ,id_product
                        ,id_order
                        ,count
                        ,price
                        ,created_at
                        ,updated_at 
              FROM `additionals`
              WHERE $byWhat=$name;";
        return Database::query($sql);
    }
}