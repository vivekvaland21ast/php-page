<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$currentUserId = 1;

$id = $_GET['id'];

$note = $db->query("select * from notes where id = {$id}")->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/edit.view.php", [
    'heading' => 'Edit note',
    'error' => [],
    'note'=>$note
]);
