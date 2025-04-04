<?php 
    
    
    $usuario = "nutrikids";
    $senha = "2023nutrik";
    $database = "login";
    $host = "localhost";


      $con = mysqli_connect($host, $usuario, $senha, $database) or die("Erro de conexão");

      if(isset($_POST['update'])){
         $escola = $_POST['escola'];
         $id = $_POST['id'];
         $imc = $_POST['imc'];
         $peso = $_POST['peso'];
         $altura = $_POST['altura'];
         $Circunferencia_abdominal = $_POST['Circunferencia_abdominal'];
         $idade = $_POST['idade'];
         $sexo = $_POST['sexo'];
         


         $query = mysqli_query($con, "UPDATE informacoes 
         SET escola = '$escola',
            imc = '$imc',
            peso = '$peso', 
            altura = '$altura', 
            Circunferencia_abdominal = '$Circunferencia_abdominal', 
            idade = '$idade', 
            sexo = '$sexo' 
            
         WHERE id='$id'");
         
     }
     header('location: editar.php');

?>