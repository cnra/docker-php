<?php

$value = "World";

$db = new PDO('mysql:host=192.168.99.100;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');
//var_dump($db);

$res = $db->query('SELECT * FROM dockerSample');
$databaseTest = ($db->query('SELECT * FROM dockerSample'))->fetchAll(PDO::FETCH_OBJ);

?>

<html>
    <body>
        <h1>Hello, <?= $value ?>!</h1>

        <?php foreach($databaseTest as $row): ?>
            <p>Hello, <?= $row->name ?></p>
        <?php endforeach; ?>
    </body>
</html>