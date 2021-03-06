<?php

namespace App\Controllers;

use Core\View;

/**
 * Class ContactController
 * @package App\Controllers
 */
class ContactController extends AppController
{
    /**
     * @throws \Exception
     */
    public function contactAction(): void
    {
        $products = $this->products;
        $categories = $this->categories;
        $brands = $this->brands;
        $this->set(compact('products', 'categories', 'brands'));
        $this->getView();
    }

    /**
     * @return void
     * @throws \Exception
     */
    public function getView(): void
    {
        $viewObj = new View(["controller" => "Site/Contact", "action" => "contact"], 'Site/default', 'contact');
        $viewObj->rendor($this->data);
    }
}