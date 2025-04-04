<?php

include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (nome, email, senha) VALUES(?, ?, ?)";
    
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('sss', $nome, $email, $senha);

    if ($stmt->execute()) {
        // Inserção bem-sucedida
        echo "Cadastro realizado com sucesso!";
    } else {
        // Tratamento de erro
        echo "Erro ao cadastrar. Por favor, tente novamente.";
    }

    $stmt->close();
    $mysqli->close();
}

?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <title>Cadastro</title>
  </head>
  <body>
    <section>
      <div class="container mt-5 pt-5"><!--centralizar no meio-->
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto "><!--responsividade-->
            <div class="card border-0 shadow" style="border-radius: 25px;"><!--sombra e canto redondo-->
              <div class="card-body m-4"><!--tamanho da caixa-->
                <h1 class="d-flex justify-content-center">Faça seu cadastro</h1><!--centraliza o texto no meio-->
                <form action="" method="POST">
                  <input type="text" name="nome" id="" class="form-control my-4 py-2" placeholder="Email" />
                  <input type="text" name="email" id="" class="form-control my-4 py-2" placeholder="Usuário" />
                  <input type="password" name="senha" id="" class="form-control my-4 py-2" placeholder="Senha" />
                  <div class="text-center mt-3">
                    <button class="btn btn-primary">Cadastrar</button>
                  </div>
                  
                </form>
                  <div class="text-center mt-3">
                    <button class="btn btn" style= "border-color:blue; background-color:white" type="submit">
                      <a href="index.php">  
                        <i class="bi bi-house"></i>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-house' viewBox='0 0 16 16'>
                          <path d='M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z'/>
                        </svg>
                      </a>
                    </button>
                    <a href="login.php">    
                      <button class="btn btn " style="background-color:black; border-color:white; color:white" >Voltar</button>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>