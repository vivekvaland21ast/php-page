<?php

use Core\Response;

function isUrl($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
    die();
}
function abort($code = 404)
{
    http_response_code($code);

    require base_path("Views/{$code}.php");
    die();
}
function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{

    extract($attributes);
    require base_path('Views/' . $path);
}
function redirect($path)
{
    header("location: {$path}");
    exit();
}
