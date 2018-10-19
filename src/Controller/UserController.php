<?php

namespace App\Controller;

use Core\Container;

class UserController
{
    public function store()
    {
        Container::get('db:query')->insert('user', [
            'name' => $_POST['name']
        ]);

        header('Location: /');
    }
}
