<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductsModel;
use Core\Session;
use Core\View;

/**
 * Class CartController
 * @package App\Controllers
 */
class CartController extends AppController
{
    /**
     * @throws \Exception
     */
    public function cartAction(): void
    {
        $products = $this->products;
        $categories = $this->categories;
        $brands = $this->brands;
        $cartModel = new CartModel();
        $table = $cartModel->printCart();
        $this->set(compact('products', 'categories', 'brands', 'table'));
        $this->getView();
    }

    /**
     * @return void
     * @throws \Exception
     */
    public function getView(): void
    {
        $viewObj = new View(["controller" => "Site/Cart", "action" => "cart"], 'Site/default', 'cart');
        $viewObj->rendor($this->data);
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function addAction()
    {
        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $qty = !empty($_POST['qty']) ? (int)$_POST['qty'] : 1;
        if ($id) {
            $product = ProductsModel::getDataWhere('id', $id);
        }
        if (!$product) {
            return false;
        }

        $cart = new CartModel();
        $table = $cart->addToCart($product, $qty);

        echo json_encode($table);
    }

    /**
     * @throws \Exception
     */
    public function getQtyTotalAction()
    {
        echo Session::getData('cart', 0)['qtyTotal'];
    }

    /**
     * @throws \Exception
     */
    public function getTotalAction()
    {
        echo '$ ' . Session::getData('cart', 0)['total'];
    }

    /**
     * @throws \Exception
     */
    public function clearAction()
    {
        if (Session::get('cart')) {
            Session::delete('cart');
        }
        $cartModel = new CartModel();
        $table = $cartModel->printCart();
        echo json_encode($table);
    }
}