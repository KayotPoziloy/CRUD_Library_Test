<?php

//global $connect;
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
                        <td><?= $author[2] ?></td>
                        <td><?= $author[3] ?></td>
                        <td><a href="update.php?id=<?= $author[0] ?>">Изменить</a></td>
                        <td><a href="vendor/delete.php?id=<?= $author[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>

    </table>
    <h3>Добавить автора</h3>
    <form action="vendor/create.php" method="post">

        <p>Имя</p>
        <input type="text" name="firstName">

        <p>Отчество</p>
        <input type="text" name="middleName">

        <p>Фамилия</p>
        <input type="text" name="lastName">

        <br>
        <button type="submit">Добавить автора</button>
    </form>


</body>
</html>

