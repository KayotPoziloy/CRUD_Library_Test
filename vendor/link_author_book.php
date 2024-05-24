<?php

require_once '../config/connect.php';

$author_id = $_POST['author_id'];
$book_id = $_POST['book_id'];

mysqli_query($connect,
    "INSERT INTO `author_book` (`author_id`, `book_id`) VALUES ('$author_id', '$book_id')");

//$query = "INSERT INTO `author_book` (`author_id`, `book_id`) VALUES (?, ?)";
//$stmt = mysqli_prepare($connect, $query);
//mysqli_stmt_bind_param($stmt, 'ii', $author_id, $book_id);

header('Location: /');
