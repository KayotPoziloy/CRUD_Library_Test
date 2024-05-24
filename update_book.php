<?php
    require_once 'config/connect.php';

    $book_id = $_GET['id'];
    $book = mysqli_query($connect, "SELECT * FROM `book` WHERE `id` = '$book_id'");
    if (!$book) {
        die('Query Error: ' . mysqli_error($connect));
    }
    $book = mysqli_fetch_assoc($book);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
<h3>Обновить книгу</h3>
<form action="vendor/update_book.php" method="post">
    <input type="hidden" name="id" value="<?= $book['id'] ?>">
    <p>Название</p>
    <input type="text" name="title" value="<?= $book['title'] ?>">

    <p>Год</p>
    <input type="text" name="year" value="<?= $book['publication_year'] ?>">

    <p>ISBN</p>
    <input type="text" name="isbn" value="<?= $book['isbn'] ?>">

    <p>Страницы</p>
    <input type="text" name="pages" value="<?= $book['pages'] ?>">

    <br>
    <button type="submit">Изменить</button>
</form>
</body>
</html>
