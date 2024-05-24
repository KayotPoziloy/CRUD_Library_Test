<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];

mysqli_query($connect,
    "UPDATE `author` SET 
                    `firstName` = '$name', 
                    `lastName` = '$lastName', 
                    `middleName` = '$middleName' 
                WHERE `author`.`id` = '$id'
                ");

header('Location: /');
