<?php

use Core\Database;
use Core\Validator;

require base_path("Core/Validator.php");

$config = require base_path("config.php");

$db = new Database($config['database']);

$error = [];
//dd(Validator::email('sdgffg@gmail.com'));




view("notes/create.view.php",[
    'heading'=> 'Create a note',
    'error'=> []
]);
