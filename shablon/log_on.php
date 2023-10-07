<?php

require "libs/rb.php";

R::setup('mysql: host=localhost; dbname=hack', 'root', '');

if (!R::testConnection()){
    echo "Произошла ошибка при подключении к базе данных";
    exit();
}

$user = R::dispense("users");

$user_name = filter_var(trim($_POST["user_name"]), FILTER_SANITIZE_STRING);
$user_mail = filter_var(trim($_POST["email"]), FILTER_SANITIZE_STRING);
$user_password = md5(filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING));

if (R::count('users', 'email = ?', [$user_mail]) == 1){
    echo "Знаем мы одного такого!";
    exit();
}

$user->name = $user_name;
$user->email = $user_mail;
$user->password = $user_password;

R::store($user);

echo "Здравствуйте, $user_name! <br> <a href='index.php'>Back</a>";

R::close();