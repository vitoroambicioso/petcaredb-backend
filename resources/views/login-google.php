<?php

//autoload das classes do composer
require __DIR__.'/login-google/vendor/autoload.php';

//dependencias
use \App\Session\User as SessionUser;

//header
require __DIR__.'/login-google/includes/header.php';

//corpo da pagina
include SessionUser::isLogged() ? 
    __DIR__.'/login-google/includes/admin.php':
    __DIR__.'/login-google/includes/login.php';

//footer
include __DIR__.'/login-google/includes/footer.php';