<?php

// echo "<pre>";
// echo $_SERVER['REQUEST_URI'];
// echo "</pre>";

$config = require base_path("config.php");

$db = new Database($config['database']);

$currentUserId = 1;

$id = $_GET['id'];

$note = $db->query("select * from notes where id = {$id}")->findOrFail();
//$note = $db->query("select * from notes")->findOrFail();

//dd($note);

authorize($note['user_id'] === $currentUserId);


view("notes/show.view.php",[
    'heading'=> 'Note',
    'note'=> $note
]);
