<?php

use Core\Validator;

if (!Validator::string($_POST['body'], 1, 1000)) {
    $error['body'] = 'The body cannot be more than 1000 characters.';
}

if (empty($error)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
}
