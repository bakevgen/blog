<?php

    try {
        $pdo = new PDO('mysql:dbname=blog; host=localhost', 'root', 'root');
    } catch (PDOException $e) {
        die($e->getMessage());
    }