<?php

    session_start();

    if ($_SESSION['auth'] == true){
        
        ?>

            <h1>Админка</h1>
            <a href="index.php" style="display: inline-block; margin-bottom: 20px;">На главную</a>
            <form action="create.php" method="post">
                <input type="text" name="name" placeholder="Заголовок" style="display: block; width: 200px; margin-bottom: 10px;">
                <textarea name="text" placeholder="Текст" style="display: block; width: 200px; height: 250px; margin-bottom: 10px;"></textarea>
                <input name="submit" type="submit" value="Добавить" style="display: block; width: 200px;">
            </form>
        <?php

    } else {
        exit("<meta http-equiv='refresh' content='0; url= /login.php'>");
    }

?>