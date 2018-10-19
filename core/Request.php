<?php

namespace Core;

class Request
{
    public static function uri()
    {

        $result = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        return $result;
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
