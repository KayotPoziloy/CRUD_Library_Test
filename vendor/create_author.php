<?php

require_once '../config/connect.php';

$name = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];

mysqli_query($connect,
    "INSERT INTO `author` (`id`,`firstName`,`lastName`,`middleName`) VALUES (NULL, '$name', '$lastName', '$middleName')");

header('Location: /');
