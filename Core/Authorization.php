<?php

namespace Core;

use Core\Session;

/**
 * Class Authorization
 * @package Core
 */
abstract class Authorization
{
    private static $email;
    private static $logged = false;

    /**
     * @param $email
     * @return string
     */
    public static function login($email): string
    {
        self::$logged = true;
        self::$email = $email;
        self::addToSession();
        Session::set('email',$email);

        return Session::sessionRead();
    }

    /**
     * @return bool
     */
    public static function isAuth(): bool
    {
        if (!Session::get('email')) {
            return false;
        };
        if (!Session::checkCookie()) {
            return false;
        }
        return true;
    }

    /**
     * @return bool
     */
    public static function logout(): bool
    {
        return Session::destroy();
    }

    /**
     * @return void
     */
    private static function addToSession(): void
    {
        Session::set('remote_addr', $_SERVER['REMOTE_ADDR']);
        Session::set('user_agent', $_SERVER['HTTP_USER_AGENT']);
    }
}