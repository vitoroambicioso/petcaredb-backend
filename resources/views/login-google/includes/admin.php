<?php

   //retorna as informacoes da sessao do usuario
   $info = \App\Session\User::getInfo();

?>

<h1>Admin - PETCARE</h1>
<p>Olá, <b><?=$info['name']?></b>. Bem-vindo!</p>

<a href="logout.php">
   <button class="btn btn-danger">Sair</button>
</a>
