<?php

$config = require("config.php");

$db = new Database($config['database']);

$heading = "Create a note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $error = [];

    if (strlen($_POST['body']) === 0) {
        $error['body'] = 'A description is required';
    }

    if (strlen($_POST['body']) > 1000) {
        $error['body'] = 'The body cannot be more than 1000 characters.';
    }

    if (empty($error)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require "./Views/note-create.view.php";
