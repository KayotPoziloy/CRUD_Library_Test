<?php

//global $connect;
require_once 'connect.php';



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
            <th>Второе имя</th>
            <th>Фамилия</th>
        </tr>


        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </table>

    <pre>
        <?php
            $authors = mysqli_query($connect, "SELECT * FROM `author`");
            $authors = mysqli_fetch_all($authors);
            print_r($authors);
        ?>
    </pre>
</body>
</html>

