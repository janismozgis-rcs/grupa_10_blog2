<?php
include '../functions.php';
include '../models/User.php';

$user = User::getUserByEmailAndPassword($_POST['username'], $_POST['password']);

if ($user) {
    $_SESSION['user']['id'] = $user->id;
    $_SESSION['user']['firstName'] = $user->firstName;
    $_SESSION['user']['lastName'] = $user->lastName;
    header('Location: index.php');
    exit;
}

header('Location: index.php?login&error');


