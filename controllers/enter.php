<?php

    if (
        !empty($_REQUEST['password']) 
        and !empty($_REQUEST['login'])
    ) {

        $name_login = $_REQUEST['login']; 
        $password = $_REQUEST['password']; 
           
            $user = new \battle\models\User($db);
            $result = $user->getUser($name_login, $password);
            
            if (is_array($result)) {
                
                $login->setValue($name_login);
                $msg->setValue('Пользователь авторизован < ' . $name_login . ' >');
//                header('Location: ' . BASE_URL);
                header('Location: wellcom');
                exit;
            } else {
                $msg->setValue('Неверный логин или пароль. Повторите попытку.');
            }
                
    }
        
require_once 'views/enter.php';
