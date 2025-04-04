<?php

include('protect.php');

include('conexao.php');



if(!empty($_GET['search']))
{
  $data = $_GET['search'];
  $sql = "SELECT * FROM informacoes WHERE id LIKE '%$data%' OR escola LIKE '%$data%' ORDER BY id DESC";
}
else
{
  $sql = "SELECT * FROM informacoes ORDER BY id DESC";
  }
$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    
    <style>
      .box-search{
        display: flex;
        justify-content: center;
        gap: .3%;
      }
      tr{
        border-bottom: 1px solid black;

      }

      #box-table{

        border-radius: 25px;
        border: 1px solid #73AD21;
        width: 80%;
        height: 100%;
        box-shadow: 2px 2px 5px lightblue;
      }
    </style>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/35329e839e.js" crossorigin="anonymous"></script>

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <div class="box-search mt-4">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </button>
        
      </div>
    <br><br>

    <div class="d-flex justify-content-center" >
      <div id="box-table" class= " p-3" >
        <table class="table table-borderless table-hover table-responsive-lg">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Escola</th>
              <th scope="col">IMC</th>
              <th scope="col">Peso</th>
              <th scope="col">Altura</th>
              <th scope="col">Circunferência abdominal</th>
              <th scope="col">Idade</th>
              <th scope="col">Sexo</th>
            </tr>
        </thead>
          <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['escola']."</td>";
                    echo "<td>".$user_data['imc']."</td>";
                    echo "<td>".$user_data['peso']."</td>";
                    echo "<td>".$user_data['altura']."</td>";
                    echo "<td>".$user_data['Circunferencia_abdominal']."</td>";
                    echo "<td>".$user_data['idade']."</td>";
                    echo "<td>".$user_data['sexo']."</td>";
                    echo "<tr>";
                }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
      if(event.key === "Enter")
      {
        searchData();
      }
    });

    function searchData()
    {
      window.location = 'pesquisa.php?search='+search.value;
    }
</script>
</html>