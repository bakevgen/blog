<?php
    session_start();
    
    $pass = '123';

    if (isset($_POST['submit']) and $_POST['pass'] == $pass) {

        $_SESSION['auth'] = true;

        exit("<meta http-equiv='refresh' content='0; url= /admin.php'>");
    } else if ($_SESSION['auth'] == true) {
        header('Location: /admin.php');
    } else {
         echo '<p>Логин или пароль неверны!</p>';
    } 
?>  

<form method="post">
    <input type="password" name="pass">
    <input type="submit" name="submit" value="Login">
</form> 