<?php

include('protect.php');

include('conexao.php');

$sql = "SELECT * FROM informacoes ORDER BY id DESC";

$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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
    <div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">IMC</th>
            <th scope="col">Peso</th>
            <th scope="col">Altura</th>
            <th scope="col">Circunferência abdominal</th>
            <th scope="col">idade</th>
            <th scope="col">sexo</th>
            <th scope="col">código</th>
          </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['imc']."</td>";
                    echo "<td>".$user_data['peso']."</td>";
                    echo "<td>".$user_data['altura']."</td>";
                    echo "<td>".$user_data['Circunferencia_abdominal']."</td>";
                    echo "<td>".$user_data['idade']."</td>";
                    echo "<td>".$user_data['sexo']."</td>";
                    echo "<td>".$user_data['escola']."</td>";
                    echo "<td> 
                        <a href='edt.php?id=$user_data[id]'>
                        <i class='bi bi-pencil-square'></i>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                        </svg>
                        </a>
                    </td>";
                    echo "<td>
                        <button type='submit' name='excluir'>
                        <a href='remover.php?id=$user_data[id]'>
                        <i class='bi bi-trash3'></i>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                        <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                        </svg>
                        </a>
                        </button>
                    </td>";
                    echo "<tr>";
                }
            ?>
        </tbody>
      </table>
    </div>
</body>
</html>