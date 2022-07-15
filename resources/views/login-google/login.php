<?php

//autoload do composer
require __DIR__.'/vendor/autoload.php';

//dependecias
use Google\Cliente as GoogleCliente;
use \App\Session\User as SessionUser;

//validacao principal do cookie

//verifica campos obrigatorios
if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])){
    header('location: index.php');
    exit;
}

//cookie csrf
$cookie = $_COOKIE['g_csrf_token'] ?? '';

//verifica o valor do cookie e do POST para o csrf
if($_POST['g_csrf_token'] != $cookie){
    header('location: index.php');
    exit;
}

//validacao secundaria do token

//instancia do cliente google
$client = new Google_Client(['client_id' => '525613560035-nocan4kpqc1iumus5lgtv343mao7ddqf.apps.googleusercontent.com']);

//obtem os dados do usuario com base no jwt
$payload = $client->verifyIdToken($_POST['credential']);

//verifica os dados do payload
if (isset($payload['email'])) {
    SessionUser::login($payload['name'], $payload['email']);
    header('location: index.php');
    exit;
}

//problema ao consultar a API
die('Problema ao consultar a API');