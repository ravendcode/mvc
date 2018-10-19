<?php

use Core\Container;
use Core\Database\{Connection, QueryBuilder};
use Core\{Router, Request};

require_once __DIR__ . '/helpers.php';

Container::bind('config:database', require __DIR__ . '/../config/database.php');

Container::bind('db:query', new QueryBuilder(
    Connection::make(Container::get('config:database'))
));

Router::load(__DIR__ . '/../config/routes.php')
    ->direct(Request::uri(), Request::method());
