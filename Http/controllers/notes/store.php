<?php

use Core\Validator;
use Core\Database;
use Core\App;
// $config = require base_path("config.php");

// $db = new Database($config['database']);

$db = App::resolve(Database::class);

$error = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $error['body'] = 'The body cannot be more than 1000 characters.';
}
if (!empty($error)) {
    return view("notes/create.view.php",[
        'heading'=> 'Create a note',
        'error'=> $error
    ]);
}

$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);

$_SESSION['_flash'] = $form->errors();
header('location:/notes');
die();

