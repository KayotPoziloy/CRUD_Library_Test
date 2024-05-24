<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$year = $_POST['year'];
$isbn = $_POST['isbn'];
$pages = $_POST['pages'];

mysqli_query($connect,
    "INSERT INTO `book` (
                    `id`,
                    `title`,
                    `publication_year`,
                    `isbn`,
                    `pages`) VALUES (NULL, '$title', '$year', '$isbn', '$pages')");

header('Location: /');
