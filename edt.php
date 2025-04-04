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
            $escola = $User_data['escola'];
            $imc = $User_data['imc'];
            $peso = $User_data['peso'];
            $altura = $User_data['altura'];
            $Circunferencia_abdominal = $User_data['Circunferencia_abdominal'];
            $idade = $User_data['idade'];
            $sexo = $User_data['sexo'];
            
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
        <title>CADASTRAR</title>

        <style>
        
          .box{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color: #d6dee2;
            padding: 15px;
            border-radius: 15px;
            width: 27%;
          }
          fieldset{
            border: 3px solid #c0c0c0;
          }
          legend{
            border: 1px solid #c0c0c0;
            padding: 10px;
            text-align: center;
            background-color: #c0c0c0;
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
            color: black;
          }


        </style>

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
   
    

    <div class="box mt-5">
          <div class="container">
        
          <form action="SaveEdit.php" method="POST">
            <fieldset>
              <legend><b>Editar informações</b></legend>  
            </fieldset>
              <br>
              <div class="inputBox">
                <input type="text" name="escola" value='<?php echo $escola ?>' id="escola" class="inputUser" required>
                <labelfor="escola" class="labelInput" >Escola</label>
              </div>  
              <br>
              <div class="inputBox">
                <input type="text" name="imc" value='<?php echo $imc ?>' id="imc" class="inputUser" required>
                <labelfor="imc" class="labelInput" >IMC</label>
              </div>  
              <br>
              <div class="inputBox">
                <input type="text" name="peso" value='<?php echo $peso ?>' id="peso" class="inputUser" required>
                <label class="labelInput" for="peso">Peso</label>
              </div>
              <br>
              <div class="inputBox">
                <input type="text" name="altura" value='<?php echo $altura ?>' id="altura" class="inputUser" required>
                <label class="labelInput" for="altura">Altura</label>
              </div>
              <br>
              <div class="inputBox">
                <input type="text" name="Circunferencia_abdominal" value='<?php echo $Circunferencia_abdominal ?>' id="Circunferencia_abdominal" class="inputUser" required>
                <label class="labelInput" for="Circunferencia_abdominal">Circunferência abdominal</label>
              </div>
              <br>
              <div class="inputBox">
                <input type="text" name="idade" value='<?php echo $idade ?>' id="idade" class="inputUser" required>
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
              
              <input type="hidden" name= "id" value="<?php echo $id?>">
            <div class="d-flex justify-content-center">
              <button class="btn btn" style="padding:20px 50px 20px 50px" type="submit" name="update"><i class="bi bi-check-lg"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
              </svg></button>
            </div>
            </form>
              <a href="editar.php">    
                <button class="btn btn " style="background-color:red; border-color:white; color:white" >Voltar</button>
              </a>
              </div>
        </div>
        
    </body>
</html>