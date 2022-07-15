<div class="box-login">
  
    <link rel="stylesheet" href="./login.css">
    <div class="title">
        <h1>Atualização de dados</h1>
    </div>
    
    <form method="put" action="{{route('user.update')}}">
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
          <button class="submit">Atualizar dados</button>
        </div>
  </form>
  <a href="http://localhost:8000/"><button type="button" class="btn btn-outline-primary">Home</button></a>
</div>