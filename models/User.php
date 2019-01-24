<?php
include '../helpers/Database.php';

class User
{
    public $id;
    public $email;
    public $firstName;
    public $lastName;
    public $password;

    public static function getUserByEmailAndPassword($email, $password) {
        $result = Database::query("SELECT * FROM users WHERE email = ? AND password = ?", [$email, $password]);
        if ($result) {
            $user = new User();
            $user->id = $result['id'];
            $user->email = $result['email'];
            $user->firstName = $result['firstName'];
            $user->lastName = $result['lastName'];
            $user->password = $result['password'];

            return $user;
        }

        return null;
    }
}