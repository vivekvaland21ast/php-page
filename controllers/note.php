<?php

// echo "<pre>";
// echo $_SERVER['REQUEST_URI'];
// echo "</pre>";

$config = require("config.php");

$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;

$id = $_GET['id'];

$note = $db->query("select * from notes where id = {$id}")->findOrFail();
//$note = $db->query("select * from notes")->findOrFail();

//dd($note);

authorize($note['user_id'] === $currentUserId);



require "./Views/note.view.php";
