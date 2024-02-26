<?php

// echo "<pre>";
// echo $_SERVER['REQUEST_URI'];
// echo "</pre>";

$config = require("config.php");

$db = new Database($config['database']);

$heading = "My Notes";

$notes = $db->query('select * from notes where user_id = 1')->get();
//$notes = $db->query('select * from notes')->get();

//dd($notes);

require "./Views/notes.view.php";