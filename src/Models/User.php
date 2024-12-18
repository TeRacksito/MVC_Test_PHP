<?php

namespace Daw2\MvcTestPhp\Models;

class User
{
    static private $users = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'hola@buenas'],
        ['id' => 2, 'name' => 'Jane Doe', 'email' => 'hola@malas'],
        ['id' => 3, 'name' => 'John Smith', 'email' => 'hola@feo'],
    ];

    public static function all()
    {
        return self::$users;
    }

    public static function find($id)
    {
        return array_first(self::$users, function ($user) use ($id) {
            return $user['id'] == $id;
        });
    }
}
