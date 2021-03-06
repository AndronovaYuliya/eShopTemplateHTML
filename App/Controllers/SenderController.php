<?php

namespace App\Controllers;

use Core\App;
use Core\Session;
use Core\TSingletone;
use Sender\Sender;

/**
 * Class SenderController
 * @package App\Controllers
 */
class SenderController
{
    use TSingletone;

    protected $data;

    /**
     * @throws \Exception
     */
    public function letterAction(): void
    {
        ob_start();

        $emailSubscriber = $_POST['email'];
        $name = $_POST['name'];
        $email = 'andronovayuliyatest@gmail.com';

        require RESOURCES . '/Sender/subscribe.php';

        $template = ob_get_clean();

        $config = App::$app->getProperies();
        $data = ['emailTo' => $email, 'nameTo' => $name
            , 'emailFrom' => $config['email'], 'nameFrom' => $config['title']];

        Sender::sendMsg($config, $template, 'New subscriber', $data);

        echo "Sent!";
    }

    /**
     * @param $orderId
     * @param $email
     * @param $name
     * @throws \Exception
     */
    public function mailOrder($orderId, $email, $name)
    {
        $config = App::$app->getProperies();
        $data = ['emailTo' => $email, 'nameTo' => $name
            , 'emailFrom' => $config['email'], 'nameFrom' => $config['title']];

        ob_start();
        $cart = Session::get('cart');
        require RESOURCES . '/Sender/mailOrder.php';
        $template = ob_get_clean();

        Sender::sendMsg($config, $template, 'Order: ' . $orderId, $data);
    }

    /**
     * @param $orderId
     * @param $email
     * @param $name
     * @throws \Exception
     */
    public function mailOrderToAdmin($orderId, $email, $name)
    {
        $config = App::$app->getProperies();
        $data = ['emailFrom' => $email, 'nameFrom' => $name
            , 'emailTo' => $config['email'], 'nameto' => $config['title']];

        ob_start();
        $cart = Session::get('cart');
        require RESOURCES . '/Sender/mailOrder.php';
        $template = ob_get_clean();

        Sender::sendMsg($config, $template, 'Order: ' . $orderId, $data);
    }
}