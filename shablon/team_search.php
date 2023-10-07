<?php

require 'libs/rb.php';

R::setup('mysql:host=localhost;dbname=hack', 'root', '');

if (!R::testConnection()){
    echo "Произошла ошибка при подключении к базе данных";
    exit();
}

$type = filter_var(trim($_POST["type"]), FILTER_SANITIZE_STRING);

$team = R::dispense("team");

$team->type = $type;
$team->userid = $_COOKIE["user_name"];

R::store($team);

header("Location: main.php");







R::close();
