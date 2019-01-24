<?php

class Database
{

    public static function query($query, $data) {
        // sends query to sql server and gets the data
        $exampleQuery = "SELECT * FROM users WHERE email = ? AND password = ?";
        $exampleEmail = 'foo';
        $examplePassword = 'bar';
        if (
            $query == $exampleQuery 
            && $data[0] == $exampleEmail 
            && $data[1] == $examplePassword
        ) {
            return [
                'id' => 123,
                'email' => 'foo',
                'password' => 'bar',
                'firstName' => 'John',
                'lastName' => 'Doe'
            ];
        }

        return null;
    }
}