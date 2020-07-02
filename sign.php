<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label for="password">
        Password 
    </label>
        <input type="name" name="text" id="text" placeholder="Введите имя пользователя:admin" required>
        <input type="password" name="password" id="password" placeholder="Введите пароль:12345"required>
        <input type="submit" value="submit" name="submit"><br>
</form>
</body>
</html><link rel="stylesheet" href="style.css">

<?php
     if ( isset($_POST['password']) && isset($_POST['text'])){

        if (( $_POST['password'] == '12345' )&& ( $_POST['text'] == 'admin' )){
            header ('Location: index.php');
        }else{
            echo '<h3 class="error">Введены неверные логин или пароль</h3>';
            }}
?>