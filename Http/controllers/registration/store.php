<?php
use Core\Database;
use Core\Validator;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];

//validate the form inputs

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide valid email address';
}

if (!Validator::string($password, 1, 5)) {
    $errors['password'] = 'Please provide a password of at least seven characters';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

//check if already exist

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email =:email', [
    'email' => $email
])->find();

//dd($result);
//if yes
if ($user) {
    //then which exits already
    header('location: /');
    exit();
} else {
    //if not exits then add into users table
    $db->query('INSERT INTO users(email,password) VALUES(:email,:password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
    ]);

    //user is logged in

    login($user);

    header('location:/');
    exit();
}