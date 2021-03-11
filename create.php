<?php
    include 'db.php';

    $name = $_POST['name'];
    $text = $_POST['text'];
    $date = date("m.d.y");

    if (isset($_POST['submit'])) {
        $sql = ("INSERT INTO `posts`(`name`, `text`, `date`) VALUES(?,?,?)");
        $query = $pdo->prepare($sql);
        $query->execute([$name, $text, $date]);

        header('Location: /admin.php');
        exit();
    }