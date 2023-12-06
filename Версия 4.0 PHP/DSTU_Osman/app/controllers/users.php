<?php
include __DIR__.'/../../app/database/db.php';

$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
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
        $pass = password_hash($passF, PASSWORD_DEFAULT);
        $post = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $pass
        ];
        $id = insert('users', $post);
    }

    //    $last_row = selectOne('users', ['id' => $id]);

}else{
    //    echo 'GET';
    $login = '';
    $email = '';
}

 //   $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);


