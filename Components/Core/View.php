<?php

namespace Components\Core;

class View
{
    public static function generate($content_view, $data = null,$singleProduct=null)
    {
        include '../resources/home/'.$content_view;
    }
}