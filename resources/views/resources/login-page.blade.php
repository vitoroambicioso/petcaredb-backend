<div class="box-login">
  
    <link rel="stylesheet" href="./login.css">
    <div class="title">
        <h1>Login</h1>
        <small>Ainda não possui uma conta? <a href="http://localhost:8000/usuario">Cadastre-se aqui!</a></small>
    </div>
    
    <form method="post" action="{{route('user.login')}}">
    @csrf
        <div class="itens">
          <label>Nome ou e-mail:</label>
          <input type="text" name="email" placeholder="Digite aqui seu e-mail">
        </div>
      
        <div class="itens">
          <label>Senha:</label>
          <input type="password" name="password" placeholder="*********">
        </div>
      
        <div class="remenber">
          <input type="checkbox">
          <label for="save">Mantenha-me conectado</label>
        </div>
      
        <div class="itens">
          <button class="submit">Entrar</button>
          <a href="#">Esqueci minha senha</a>
        </div>
  </form>
  <a href="http://localhost:8000/"><button type="button" class="btn btn-outline-primary">Home</button></a>
</div>