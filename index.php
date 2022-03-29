<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">
    
    <title>TROPICHOTEL</title>
    

    <div></div>
</head>
<body>
    <div id="site">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success"><!--navegaçao-->
        <div class="container">
          <a class="navbar-brand" href="index.php"><span id="span2">TROPIC<span id="span1">HOT</span>EL</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              
              <!--<li class="nav-item">
                <a class="nav-link active" href="formulario.php">Agendar quarto</a>
              </li>-->
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Locais
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><span id="span3"><a class="dropdown-item" href="#">Rio de Janeiro</a></li>
                  <li><a class="dropdown-item" href="#">São Paulo</a></li>
                  <li><a class="dropdown-item" href="#">Espirito Santo</a></span></li>
                  <li><a class="dropdown-item" href="#">Minas Gerais</a></span></li>
                </ul>
              </li>
              
            </ul>
            <!--<form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-dark" type="submit">Pesquisar</button>
            </form>-->

            <nav class="navbar navbar-light">
                <form action="loginadm.php" method="POST" class="container-fluid justify-content-start">
                    <button class="btn btn-dark me-2" type="submit">logar</button>
              </form>
          </nav>
          </div>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"><!--carossel-->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/hotel1.jpg" class="d-block w-100" alt="..." height="700px">
            <imput type="button">
          </div>
          <div class="carousel-item">
            <img src="./img/hotel2.jpg" class="d-block w-100" alt="..." height="700px">
          </div>
          <div class="carousel-item">
            <img src="./img/hotel3.jpg" class="d-block w-100" alt="..." height="700px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

        
      <section>
          <div id="hoteis">
            
            
            
          <div class="container"><!--hoteis-->
          <h2 style="margin-bottom: 20px;">Hoteis na sua cidade</h2>
            <div class="row">
              <div class="col">
                <img src="./img/room1.jpg" width="380" height="230">
                <a href="cadastrar.php" class="btn btn-outline-success btn-sm">Agendar</a>
                <p class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quasi ratione, qui, excepturi cumque</p>
              </div>
              <div class="col">
                <img src="./img/room2.jpg" width="380" height="230">
                <a href="cadastrar.php" class="btn btn-outline-success btn-sm">Agendar</a>
                <p class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quasi ratione, qui, excepturi cumque</p>
              </div>
              <div class="col">
                <img src="./img/room3.jpg" width="380" height="230">
                <a href="cadastrar.php" class="btn btn-outline-success btn-sm">Agendar</a>
                <p class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quasi ratione, qui, excepturi cumque</p>
              </div>
            </div>
          </div>
        </div>
        <div id="hoteis">
        <div class="container"><!--hoteis 2-->
          <div class="row">
            <div class="col">
              <img src="./img/room1.jpg" width="380" height="230">
              <a href="cadastrar.php" class="btn btn-outline-success btn-sm">Agendar</a>
              <p class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quasi ratione, qui, excepturi cumque</p>
            </div>
            <div class="col">
            <img src="./img/room2.jpg" width="380" height="230">
            <a href="cadastrar.php" class="btn btn-outline-success btn-sm">Agendar</a>
            <p class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quasi ratione, qui, excepturi cumque</p>
            </div>
            <div class="col">
            <img src="./img/room3.jpg" width="380" height="230">
            <a href="cadastrar.php" class="btn btn-outline-success btn-sm">Agendar</a>
            <p class="info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quasi ratione, qui, excepturi cumque</p>
            </div>
          </div>
          </div>
        </div>
      </section>
      
      <footer><!--footer-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
          <a class="navbar-brand" href="index.php"><span id="span2">TROPIC<span id="span1">HOT</span>EL</span></a>
          <a id="direitos">© 2022 Todos os direitos reservados</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="formulario.php">Agendar quarto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      </footer>

    </div>
</body>
</html>