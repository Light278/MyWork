<?php
include __DIR__.'/../../app/database/db.php';

$errMsg = '';

// Форма регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['password']);
    $passS = trim($_POST['password2']);


    if($login === '' || $email === '' || $passF === '') {
        $errMsg = "Заполните все поля для регистрации!";
    }elseif (mb_strlen($login, 'UTF-8') < 4){
        $errMsg = "Логин должен быть длиннее 4 символов";
    }elseif ($passF !== $passS) {
        $errMsg = "Пароли должны быть одинаковыми";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence){
            $errMsg = "Пользователь с такой почтой уже есть";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            //header('location: ' . BASE_URL);

            if ($_SESSION['admin']){
                header('location: ' . BASE_URL . "admin/posts/index.php");
            }else{
                header('location: ' . BASE_URL);
            }
            //  tt($user);
            //  exit();
        }

    //    $last_row = selectOne('users', ['id' => $id]);

    }
}else{
    //    echo 'GET';
    $login = '';
    $email = '';
}

 //   $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

//Код для авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        //  tt($existence);
        // var_dump($existence);
        if($existence && password_verify($pass, $existence['password'])) {
            //echo 'Авторизовать';
            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['username'];
            $_SESSION['admin'] = $existence['admin'];
            //header('location: ' . BASE_URL);

            if ($_SESSION['admin']){
                header('location: ' . BASE_URL . "admin/posts/index.php");
            }else{
                header('location: ' . BASE_URL);
            }
        }else{
            $errMsg = "Почта либо пароль введены неверно";
        }
    }
}else{
    $email = '';
}
