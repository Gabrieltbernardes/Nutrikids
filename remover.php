<?php

include('protect.php');

include('conexao.php');

if(!empty($_GET['id'])){

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM informacoes WHERE id=$id";

    $result = $mysqli->query($sqlselect);

    if($result->num_rows > 0)
    {
        while($User_data = mysqli_fetch_assoc($result)){
            $imc = $User_data['imc'];
            $peso = $User_data['peso'];
            $altura = $User_data['altura'];
            $Circunferencia_abdominal = $User_data['Circunferencia_abdominal'];
            $idade = $User_data['idade'];
            $sexo = $User_data['sexo'];
            $escola = $User_data['escola'];
            
        }
       
    }
    else
    {
        header('location: editar.php');
    }
    
}

?>

<html>
    <head>
        <title>Remover</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
    <header><!-- inicio Cabecalho -->
      <nav  class="navbar navbar-expand-sm navbar-light">
        
        <div class="container">
          
          <a href="logout.php" class="navbar-brand">
            <button class="btn btn-primary">SAIR</button>
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="pesquisa.php" class="nav-link">Pesquisar</a>
              </li>
              <li class="nav-item">
                <a href="adicionar.php" class="nav-link">Adicionar</a>
              </li>
              <li class="nav-item">
                <a href="consultar.php" class="nav-link">Consultar</a>
              </li>
              <li class="nav-item">
                <a href="editar.php" class="nav-link">Editar</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="btn btn-outline-dark ml-4">Login</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->
    <br><br>
    <div class="d-flex justify-content-center">
      <p class="">Deseja Excluir?</p>
    </div>
      <br>
    <div class="d-flex justify-content-center">
        <form action="excluindo.php" method="POST">
            <a href="editar.php">    
            <button class="btn btn" style="background-color:red; border-color:white; color:white">Não</button>
            </a>
            <input type="hidden" name= "id" value="<?php echo $id?>">
                
            <button class="btn btn-primary" type="submit" name="delete">Sim</button>
        </form>
    </div>
    </body>
</html>