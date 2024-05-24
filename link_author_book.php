<?php

require_once 'config/connect.php';

// Получение списка авторов
$authors = mysqli_query($connect, "SELECT * FROM `author`");
$authors = mysqli_fetch_all($authors, MYSQLI_ASSOC);

// Получение списка книг
$books = mysqli_query($connect, "SELECT * FROM `book`");
$books = mysqli_fetch_all($books, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Link Author and Book</title>
</head>
<body>
    <h3>Связать автора и книгу</h3>
    <form action="vendor/link_author_book.php" method="post">
        <p>Автор</p>
        <select name="author_id">
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author['id'] ?>">
                    <?=
                    $author['firstName'] . ' ' .
                    $author['middleName'] . ' ' .
                    $author['lastName']
                    ?>
                </option>
            <?php endforeach; ?>
        </select>

        <p>Книга</p>
        <select name="book_id">
            <?php foreach ($books as $book): ?>
                <option value="<?= $book['id'] ?>">
                    <?=
                    $book['title']
                    ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br>
        <button type="submit">Связать</button>
    </form>
</body>
</html>
