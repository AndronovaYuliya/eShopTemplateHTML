<?php

namespace App\Mappers\Admin;

use Core\Cache;
use Core\Database;

class AdminMappers
{
    /**
     * @param array $attributes
     */
    public static function addUser(array $attributes)
    {
        $sql = "INSERT INTO `users` (login, password, email,first_name, last_name,role, created_at, 
                  updated_at) VALUE (:adminLogin, :adminPassword,:adminEmail, :adminFirstName, 
                  :adminLastName, :adminRole, NOW(), NOW())";
        Database::addData($sql, $attributes);
    }

    /**
     * @param array $attributes
     * @param string $id
     */
    public static function updateUser(array $attributes, string $id)
    {
        $data = [];
        $sql = "UPDATE users SET ";
        foreach ($attributes as $key => $value) {
            $sql .= " $key = :$key,";
            $data[":" . $key] = $value;
        }
        $sql .= " updated_at= NOW() WHERE id=:id;";
        $data[":id"] = $id;

        Database::addData($sql, $data);
    }

    /**
     * @return array
     */
    public static function query(): array
    {
        $sql = "SELECT id, login, email,first_name,last_name,role FROM `users`";
        $data = Database::query($sql);
        return $data;
    }

    /**
     * @param string $byWhat
     * @param string $name
     * @return array
     */
    public static function checkUnique(string $byWhat, string $name): array
    {
        $sql = "SELECT id FROM `users` 
          WHERE $byWhat='$name'";
        return Database::query($sql);
    }

    /**
     * @param $email
     * @return array
     */
    public static function loadProfile($email): array
    {
        $sql = "SELECT id, login, email,first_name,last_name,role,password FROM `users` 
          WHERE email='$email'";
        return Database::query($sql);
    }

    /**
     * @param string $byWhat
     * @param string $name
     */
    public static function deleteProfile(string $byWhat, string $name)
    {
        $sql = "DELETE FROM users WHERE $byWhat=:name";
        Database::queryData($sql, [':name' => $name]);
    }
}
