<?php 
    include('protect.php');
    
    $usuario = "nutrikids";
    $senha = "2023nutrik";
    $database = "login";
    $host = "localhost";


      $con = mysqli_connect($host, $usuario, $senha, $database) or die("Erro de conexão");

      if(isset($_POST['delete'])){

         $id = $_POST['id'];
         $imc = $_POST['imc'];
         $peso = $_POST['peso'];
         $altura = $_POST['altura'];
         $Circunferencia_abdominal = $_POST['Circunferencia_abdominal'];
         $idade = $_POST['idade'];
         $sexo = $_POST['sexo'];
         $escola = $_POST['escola'];


         $query = mysqli_query($con, "DELETE from informacoes
         WHERE id = '$id'");
         
     }
     header('location: editar.php');

?>