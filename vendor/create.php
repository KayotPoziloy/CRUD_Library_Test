<?php

require_once '../config/connect.php';

$name = $_POST['firstName'];
$lastName = $_POST['middle'];
$middleName = $_POST['middleName'];

echo $name, $lastName, $middleName;

mysqli_query($connect, "INSERT INTO `author` (`id`, `firstName`, `lastName`, `middleName`, `books`)
VALUES (NULL, '$name', '$lastName', '$middleName', '1')");

