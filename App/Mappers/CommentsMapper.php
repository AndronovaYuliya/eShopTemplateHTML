<?php

namespace App\Mappers;

use Core\AbstractMapper;
use Core\Cache;

/**
 * Class CommentsMapper
 * @package AppModel\Mappers
 */
class CommentsMapper extends AbstractMapper
{
    protected const SELECT = "SELECT * FROM comments";
}