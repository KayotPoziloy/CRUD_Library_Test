<?php
require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library</title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Фамилия</th>
        </tr>

        <?php
            $authors = mysqli_query($connect, "SELECT * FROM `author`");
            $authors = mysqli_fetch_all($authors);
            foreach ($authors as $author) {
                ?>
                    <tr>
                        <td><?= $author[0] ?></td>
                        <td><?= $author[1] ?></td>
                        <td><?= $author[3] ?></td>
                        <td><?= $author[2] ?></td>
                        <td><a href="update_author.php?id=<?= $author[0] ?>">Изменить</a></td>
                        <td><a href="vendor/delete_author.php?id=<?= $author[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Добавить автора</h3>
    <form action="vendor/create_author.php" method="post">

        <p>Имя</p>
        <input type="text" name="firstName">

        <p>Отчество</p>
        <input type="text" name="middleName">

        <p>Фамилия</p>
        <input type="text" name="lastName">

        <br>
        <button type="submit">Добавить автора</button>
    </form>

    <h2>Книги</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Название</th>
            <th>Год издания</th>
            <th>ISBN</th>
            <th>Страницы</th>
        </tr>
        <?php
            $books = mysqli_query($connect, "SELECT * FROM `book`");
            $books = mysqli_fetch_all($books);
            foreach ($books as $book) {
                ?>
                    <tr>
                        <td><?= $book[0] ?></td>
                        <td><?= $book[1] ?></td>
                        <td><?= $book[2] ?></td>
                        <td><?= $book[3] ?></td>
                        <td><?= $book[4] ?></td>
                        <td>
                        <td><a href="update_book.php?id=<?= $book[0] ?>">Изменить</a></td>
                        <td><a href="vendor/delete_book.php?id=<?= $book[0] ?>">Удалить</a></td>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Добавить книгу</h3>
    <form action="vendor/create_book.php" method="post">

        <p>Название</p>
        <input type="text" name="title">

        <p>Год издания</p>
        <input type="text" name="year">

        <p>ISBN</p>
        <input type="text" name="isbn">

        <p>Страницы</p>
        <input type="text" name="pages">

        <br>
        <button type="submit">Добавить книгу</button>
    </form>
</body>
</html>