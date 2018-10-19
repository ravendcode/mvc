<?php

namespace App\Controller;

use Core\Container;

class PageController
{
    public function home()
    {
        $users = Container::get('db:query')->selectAll('user');

        return view('index', compact('users'));
    }

    public function about()
    {
        $title = 'About';

        if (isset($_GET['order']) and $_GET['order'] === 'desc') {
            $title = strrev($title);
        }

        return view('about', compact('title'));
    }
}
