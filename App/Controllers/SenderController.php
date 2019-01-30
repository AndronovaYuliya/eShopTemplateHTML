<?php

namespace App\Controllers;

use Sender\Sender;
use Core\View;

/**
 * Class SenderController
 * @package App\Controllers
 */
class SenderController extends AppController
{
    /**
     * @return void
     */
    public function letterAction(): void
    {
        Sender::sendMsg();
        $products = $this->products;
        $categories = $this->categories;
        $brands = $this->brands;
        $this->set(compact('products', 'categories', 'brands'));
    }

    /**
     * @throws \Exception
     */
    public function getView(): void
    {
        $viewObj = new View(["controller" => "Site/Main", "action" => "index"], 'Site/default', 'index');
        $viewObj->rendor($this->data);
    }
}