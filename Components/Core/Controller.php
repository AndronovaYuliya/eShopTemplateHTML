<?php

namespace Components\Core;


class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    public function indexAction()
    {

    }

    // действие (action), вызываемое по умолчанию
    private function action_index()
    {

    }
}
