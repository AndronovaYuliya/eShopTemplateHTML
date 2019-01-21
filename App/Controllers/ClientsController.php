<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\ClientsModel;

class ClientsController extends Controller
{
    private $data = [];
    public $errors = [];
    public $rules = [
        'required' => [
            ['name'],
            ['Login'],
            ['email'],
            ['Password'],
            ['ConfirmPassword']
        ],
        'email' => [
            ['email']
        ],
        'lengthMin' => [
            ['Password', 4],
            ['ConfirmPassword', 4],
        ]
    ];


    //registration
    public function signupAction()
    {
        if (!empty($_POST)) {
            //if($_POST->va)
            $this->data['clients'] = ClientsModel::query();

        } else {
            //redirect
        }
        echo "signup";
        die();
    }

    //login
    public function loginAction()
    {
        if (!empty($_POST)) {

        }
        echo "login";
        die();
    }

    //account
    public function accountAction()
    {
        echo "account";
        die();
    }

    //logout
    public function logoutAction()
    {
        echo "logout";
        die();
    }
}