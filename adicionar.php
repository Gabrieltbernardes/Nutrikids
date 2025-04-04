<?php

include('protect.php');

$usuario = "nutrikids";
$senha = "2023nutrik";
$database = "login";
$host = "localhost";


$con = mysqli_connect($host, $usuario, $senha, $database) or die("Erro de conexão");

if(isset($_POST['adicionar'])){
    
    $imc = $_POST['imc'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $Circunferencia_abdominal = $_POST['Circunferencia_abdominal'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $escola = $_POST['escola'];
    $query = mysqli_query($con, "INSERT INTO informacoes ( imc, peso, altura, Circunferencia_abdominal, idade, sexo, escola) VALUES ('$imc' , '$peso' ,  '$altura' , '$Circunferencia_abdominal' , '$idade' , '$sexo', '$escola') ");

    if($query){
        echo 'informações adicionadas com sucesso';
    } else {
        echo 'Não foi possivel adicionar as informações';
    }
}

?>

<html>
    <head>
        <title>Adicionar</title>
        <style>
        
          .box{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color: aliceblue;
            padding: 15px;
            border-radius: 15px;
            width: 27%;
          }
          fieldset{
            border: 3px solid #88b6f2;
          }
          legend{
            border: 1px solid #88b6f2;
            padding: 10px;
            text-align: center;
            background-color: #88b6f2;
            border-radius: 8px;
          }
          .inputBox{
            position : relative;
          }
          .inputuser{
            background: none;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
          }
          .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
          }
          .inputUser:focus~.labelInput,
          .inputUser:valid~.labelInput{
            top: -20px;
            font-size: 12px;
            color: blue;
          }


        </style>

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

    
        <div class="box mt-5">
          <div class="container">
        
          <form action="" method="POST">
            
            <fieldset>
              <legend><b>Adicionar informações</b></legend>  
            </fieldset>
          
              <br>
              <div class="inputBox">
                <input type="text" name="escola" id="escola" class="inputUser" required>
                <labelfor="imc" class="labelInput" >Escola</label>
              </div>  
              <br>
              <div class="inputBox">
                <input type="text" name="imc" id="imc" class="inputUser" required>
                <labelfor="imc" class="labelInput" >IMC</label>
              </div>  
              <br>
              <div class="inputBox">
                <input type="text" name="peso" id="peso" class="inputUser" required>
                <label class="labelInput" for="peso">Peso</label>
              </div>
              <br>
              <div class="inputBox">
                <input type="text" name="altura" id="altura" class="inputUser" required>
                <label class="labelInput" for="altura">Altura</label>
              </div>
              <br>
              <div class="inputBox">
                <input type="text" name="Circunferencia_abdominal" id="Circunferencia_abdominal" class="inputUser" required>
                <label class="labelInput" for="Circunferencia_abdominal">Circunferência abdominal</label>
              </div>
              <br>
              <div class="inputBox">
                <input type="text" name="idade" id="idade" class="inputUser" required>
                <label class="labelInput" for="idade">Idade</label>
              </div>
              <br>
              <div style="border:1px solid black; padding:10px 0px 10px 10px;border-radius:25px">
              
              <div class="d-flex justify-content-center">
              <p class="">Sexo</p>
              </div>
              
              <input type="radio" id="feminino" name="sexo" value="feminino" required>
              <label for="feminino">Feminino</label>
              <input type="radio" id="masculino" name="sexo" value="masculino" required>
              <label for="masculino">Masculino</label>
              <input type="radio" id="outro" name="sexo" value="outro" required>
              <label for="outro">Outro</label>
              </div>
              <br>
              
              <div class="d-flex justify-content-center">
              <button class="btn btn" style="padding:20px 50px 20px 50px; border-color:black; background-color:#88b6f2" type="submit" name="adicionar"><i class="bi bi-person-add" ></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
              <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
              </svg></button>
              </div>
            </form>
              <a href="index.php">    
                <button class="btn btn " style="background-color:black; border-color:black; color:white" >Voltar</button>
              </a>
            </div>
          </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>