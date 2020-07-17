<?php

namespace battle\models;

Class User
{
    private $db;


    function __construct($db)
    {
        $this->db = $db;
    }

    function add($login, $password)
    {
        $query = 'INSERT INTO users (login, password) values (:login, :password)';

        return $this
                    ->db
                    ->insertData($query, ['login' => $login, 'password' => $password]);
    }

    function getInfo($id_user)
    {
        $query = 'select name from users where id_user = :id_user';

        return $this
                    ->db
                    ->getRow($query, ['id_user' => $id_user]);
    }

    function check($login, $pass)
    {
        $query ='select id_user, position from users where name = :login and pass = password(:pass)';

        return $this
                    ->db
                    ->getRow($query, ['login' => $login, 'pass' => $pass]);
    }

    function getList()
    {
        $query ='select id_user, name from users order by name';

        return $this
                    ->db
                    ->getList($query);
    }

    function getUser($login, $password)
    {
        $query = 'select login from users where login = :login and password = :password limit 1';

        return $this
                    ->db
                    ->getRow($query, ['login' => $login, 'password' => $password]);  //
    }    
}
