<?php

namespace App\Session;

class User{

    //inicia a sessao dentro da aplicacao
    private static function init() {
        return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true;
    }

    /**
     * define a sessao de login do usuario
     * @param string $name
     * @param string $email
     */
    public static function login($name, $email) {
        //inicia a sessao da aplicacao
        self::init();

        //define a sessao do usuario
        $_SESSION['user'] = [
            'name' => $name,
            'email' => $email
        ];
    }

    public static function isLogged() {
        //inicia a sessao da aplicacao
        self::init ();

        //retorna a existencia da indice User na sessao
        return isset($_SESSION['user']);
    }

    //retorna informacoes armazenadas na sessao do usuario
    public static function getInfo() {
        //inicia a sessao da aplicacao
        self::init ();

        //retorna os dados da sessao
        return $_SESSION['user'] ?? [];
    }

    //desloga o usuario da sessao
    public static function logout() {
        //inicia a sessao da aplicacao
        self::init ();

        //remove a sessao do usuario
        unset($_SESSION['user']);
    }

}