<?php

require base_path("Core/Validator.php");

$config = require base_path("config.php");

$db = new Database($config['database']);

$error = [];
//dd(Validator::email('sdgffg@gmail.com'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $error['body'] = 'The body cannot be more than 1000 characters.';
    }

    if(empty($error)){
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}


view("notes/create.view.php",[
    'heading'=> 'Create a note',
    'error'=> $error
]);
