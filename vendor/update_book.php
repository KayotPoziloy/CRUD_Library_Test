<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$year = $_POST['year'];
$isbn = $_POST['isbn'];
$pages = $_POST['pages'];

mysqli_query($connect,
    "UPDATE `book` SET 
                  `title` = '$title',
                  `publication_year` = '$year',
                  `isbn` = '$isbn',
                  `pages` = '$pages'
              WHERE `book`.`id` = '$id'
              ");

header('Location: /');
