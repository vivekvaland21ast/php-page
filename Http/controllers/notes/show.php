<?php

use Core\Database;
use Core\App;
// $config = require base_path("config.php");

// $db = new Database($config['database']);

$db = App::resolve(Database::class);

$currentUserId = 1;

    $id = $_GET['id'];

    $note = $db->query("select * from notes where id = {$id}")->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note
    ]);


