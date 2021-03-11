<?php

    include 'db.php';

    $sql = $pdo->prepare("SELECT * FROM `posts` ORDER BY `date` ASC");
    $sql->execute();
    $result = $sql->fetchAll();


    foreach ($result as $value) { 
?>
                            
    <div class="post">
        <h2><?=$value['name'] ?></h2>
        <span><?=$value['date'] ?></span>
        <p><?=$value['text'] ?></p>
	</div>

<?php 
    } 
?>