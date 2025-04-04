<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/35329e839e.js" crossorigin="anonymous"></script>

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Finans - finanças pessoais</title>
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

    <section><!--hero section-->
        <main class="mt-2">
            <div class="container">
            <div id="caixa-conteudo" class="row " style="background-color: aliceblue; border-radius: 25px;">
                    <div class=" col-md-6 ">
                      <div class="align-self-center m-3">
                        <h2 class="display-4">NUTRIKIDS</br>2023</br><span style="color:blue;">ATENAS</span></h2>
          
                        <p class="my-4" >O projeto de extensão “NUTRIKIDS”, desenvolvido por acadêmicos do 2º período de medicina da faculdade Atenas Passos, visa acompanhar o desenvolvimento nutricional de crianças, através da mensuração das medidas antropométricas (altura,
peso, circunferência abdominal e IMC) e do acompanhamento do cartão vacinal.</p>
                          
<div class="container p-0">
                          <a href="#aqui" class="btn btn-primary text-center my-1 px-4" style="color: white;">Veja mais <i class="fa-solid fa-caret-down d-block"></i></a>
                          <p class="d-inline"></p>
                          <span class=""></span>
                        </div>
                       
                      </div>
                      
                    </div>
                    
        </main>
    </section><!--fim hero section-->

    
    <section class=" my-5"><!--nossas propostas-->
        <div class="container-fluid text-center mt-3 mb-5">
          <h1 class="display-4 mb-4">MENU</h1>

        <div class="container-fluid d-flex ">
            <div class="row justify-content-center">

          <div class="col-md-3" style=" border-radius: 25px;border: 3px solid #73AD21;padding: 25px;width: 100%;margin: 5px;height: auto;">
                <h4 class="mb-4">Clique no botão abaixo para pesquisar a criança desejada.</h3>
                <div class="justify-content-center d-flex">
                <a href="pesquisa.php"><button class="btn btn-primary btn-lg mt-5">Pesquisa</button></a>
                </div>
            </div>

            <div class="col-md-3" style=" border-radius: 25px;border: 3px solid #73AD21;padding: 25px;width: 100%;margin: 5px;height: auto;">
                <h4 class="">Clique no botão abaixo para adicionar informações nutricionais de um paciente.</h4>
                <div class="justify-content-center d-flex">
                <a href="adicionar.php"><button class="btn btn-primary btn-lg mt-4">Adicionar</button></a>
                </div>
            </div>

            <div class="col-md-3 " style=" font-size:20px ; border-radius: 25px;border: 3px solid #73AD21;padding: 25px;width: 100%;margin: 5px;height: auto;">
                <h4 class="">Clique no botão abaixo para consultar as informações nutricionais de todos os pacientes.</h4>
                <div class="justify-content-center d-flex">
                <a href="consultar.php"><button class="btn btn-primary btn-lg">Consultar</button></a>
                </div>
            </div>
            </div>
        </div>
    </section><!--fim MENU-->

    <section class="mt-5 " id="aqui"><!--hero section-->
        <main class="mt-5 ">
          
            <div class="container">
            <div id="caixa-conteudo" class="row py-4" style="background-color: aliceblue; border-radius: 25px;">
            <div class="d-flex justify-content-around">
                    <div class=" col-md-6 ">
                      <div class=" m-3 ">
                        <h2 class="display-4">NUTRIKIDS 2023</br><span class="align-self-center" style="color:blue;">ATENAS</span></h2>
                    </div>        
                    </div>

                      <div class="">
                      <p class="my-4" >O projeto de extensão “NUTRIKIDS”, desenvolvido por acadêmicos do 2º período de medicina da faculdade Atenas Passos, visa acompanhar o desenvolvimento nutricional de crianças, através da mensuração das medidas antropométricas (altura,
                        peso, circunferência abdominal e IMC) e do acompanhamento do cartão vacinal. Por
                        meio desse seguimento, é possível identificar crescimentos fora da faixa saudável – tais
                        como o sobrepeso e a desnutrição – e assegurar que os jovens estejam sendo vacinados conforme a idade. O projeto intenta, portanto, evitar que doenças de base, como a
                        diabetes e a hipertensão, desenvolvam-se e, evitar que doenças infectocontagiosas, tal
                        qual a poliomielite, ressurjam.</p>
                        <p>Pelo intermédio deste site, será possível organizar os dados e acompanhar, de
                        maneira elucidativa, os resultados. Ademais, espera-se que essa ferramenta sirva de
                        inspiração e de suporte para que esse modelo de assessoria seja gradativamente difundido entre os educadores e os profissionais de saúde.</p>
                      </div>

                      
          
        </main>
    </section><!--fim hero section-->
    
    <footer class="mt-4 mb-4 " style="border-top: black 1px solid;">
        <div class="container">
          <div class="row">
            <!--seesao
            <div class="col-md-4">
              <p>
                <a class="m-1" href="">Home</a>
                <a class="m-1" href="">Recursos</a>
                <a class="m-1" href="">Benefícios</a>
                <a class="m-1" href="">Preços</a>
              </p>
            </div>-->

          
            <div class="col d-flex justify-content-center mt-4">
              <a href="https://www.facebook.com/atenas.passos" class="btn btn-outline-dark">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/atenas.passos/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" class="btn btn-outline-dark ml-2">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.youtube.com/channel/UCu_-M88jNCCeaw9XS-FNMig?view_as=subscriber" class="btn btn-outline-dark ml-2">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
        </div>
    </footer>
  
  

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html> 
</body>
</html>