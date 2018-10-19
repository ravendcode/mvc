<?php

function view($name, $data = [])
{
    extract($data);

    return require __DIR__ . "/../templates/{$name}.tpl.php";
}
