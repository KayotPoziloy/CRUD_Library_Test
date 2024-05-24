<?php
    require_once 'config/connect.php';

    $author_id = $_GET['id'];
    $author = mysqli_query($connect, "SELECT * FROM `author` WHERE `id` = '$author_id'");
    if (!$author) {
        die('Query Error: ' . mysqli_error($connect));
    }
    $author = mysqli_fetch_assoc($author);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Обновить автора</h3>
    <form action="vendor/update_author.php" method="post">
        <input type="hidden" name="id" value="<?= $author['id'] ?>">
        <p>Имя</p>
        <input type="text" name="firstName" value="<?= $author['firstName'] ?>">

        <p>Отчество</p>
        <input type="text" name="middleName" value="<?= $author['middleName'] ?>">

        <p>Фамилия</p>
        <input type="text" name="lastName" value="<?= $author['lastName'] ?>">

        <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>
