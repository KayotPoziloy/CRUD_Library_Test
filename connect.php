<?php


$connect = mysqli_connect("localhost", "root", "root", "library");

if (!$connect) {
    die('Отсутствует подключение к базе данных');
}

