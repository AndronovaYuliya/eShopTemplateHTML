<?php

namespace App\Mappers;

use Core\AbstractMapper;
use Core\Cache;
use Core\Database;

/**
 * Class AdditionalsMapper
 * @package AppModel\Mappers
 */
class AdditionalsMapper extends AbstractMapper
{
    protected const SELECT = "SELECT * FROM additionals";
}