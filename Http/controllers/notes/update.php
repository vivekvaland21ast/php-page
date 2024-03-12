<?php

use Core\Database;
use Core\App;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

//$id = $_POST['id'];

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$error = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $error['body'] = 'The body cannot be more than 1000 characters.';
}

if (count($error)) {
    return view("notes/edit.view.php", [
        'heading' => 'Edit note',
        'error' => $error,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id=:id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

header('location: /notes');
die();