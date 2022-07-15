<div class="box-login">
  
    <link rel="stylesheet" href="./login.css">
    <div class="title">
        <h1>Cadastro</h1>
        <small>Já possui uma conta? <a href="http://localhost:8000/login">Faça login aqui</a></small>
    </div>
    
    <form method="post" action="{{route('user.create')}}">
    @csrf
        <div class="itens">
          <label>Nome:</label>
          <input type="text" name="username" placeholder="Digite aqui seu nome">
        </div>

        <div class="itens">
          <label>E-mail:</label>
          <input type="text" name="email" placeholder="Digite aqui seu e-mail">
        </div>
      
        <div class="itens">
          <label>Senha:</label>
          <input type="password" name="password" placeholder="*********">
        </div>
      
        <div class="itens">
          <button class="submit">Criar conta</button>
        </div>
  </form>
  <a href="http://localhost:8000/"><button type="button" class="btn btn-outline-primary">Home</button></a>
</div>