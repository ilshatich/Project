

<?php

require 'libs/rb.php';

R::setup('mysql:host=localhost;dbname=hack', 'root', '');

if (!R::testConnection()){
    echo "Произошла ошибка при подключении к базе данных";
    exit();
}

$user_mail = filter_var(trim($_POST["email"]), FILTER_SANITIZE_STRING);
$user_password = md5(filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING));

if (R::count('users', 'email = ?', [$user_mail]) == 0){
    echo "Мы таких не знаем!";
    exit();
}

$user_from_db = R::findOne('users', 'email = ?', [$user_mail]);
$password_from_db = $user_from_db->password;

if($user_password != $password_from_db){
    echo "Пароль не верный";
    exit();
}

$user_name = $user_from_db->name;

setcookie('user_name', $user_name, time() + 300);

R::close();

header('Location: main.php')
?>