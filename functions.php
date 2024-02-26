<?php

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

function authorize($condition,$status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}