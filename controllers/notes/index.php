<?php

// echo "<pre>";
// echo $_SERVER['REQUEST_URI'];
// echo "</pre>";

$config = require base_path("config.php");

$db = new Database($config['database']);



$notes = $db->query('select * from notes where user_id = 1')->get();
//$notes = $db->query('select * from notes')->get();

//dd($notes);

view("notes/index.view.php",[
    'heading'=> 'My Notes',
    'notes'=> $notes
]);