<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
    <title>SPET - O melhor lugar para seus pets</title>
    <link rel="stylesheet" type="text/css" href="bootstrap5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/bootstrap5.2/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
    <body>
    <header>
    	<nav>
    		<a class="logo" href="#"><img src="assets/img/logo.png" class="logo" alt="Logo"></a>
    		<div class="mobile-menu">
    			<div class="line1"></div>
    			<div class="line2"></div>
    			<div class="line3"></div>
    		</div>    		
    		<ul class="nav-list">
    			<li class="btn btn-outline-primary"><a href="#home">Home</a></li>
    			<li class="btn btn-outline-primary"><a href="#nosso-espaco">Nosso espaço</a></li>
    			<li class="btn btn-outline-primary"><a href="#">Sobre nós</a></li>
    			<li class="btn btn-outline-primary"><a href="#">Depoimentos</a></li>
          <li class="btn btn-outline-primary"><a href="#">Contato</a></li>
          <li class="agendar"><a href="#"> Agende Já!</a></li>
    		</ul>
    	</nav>
    </header>
    <section id="home">
        <img src="assets/img/puppy.png" alt="Cachorro de perfil" class="dog1">
        <div class="card card-initial">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-muted">Até 40% de desconto na primeira reserva!</h6>
            <p class="card-text text-initial">O SPA que seu pet precisa você encontra aqui!</p>
          </div>
          <div class="botoes">
            <button class="btn-home"><a href="#" class="card-link">Reservar agora!</a></button>
            <button class="btn-home"><a href="#nosso-espaco" class="card-link">Conhecer mais!</a></button>
          </div>
        </div>
    </section>
    <section id="nosso-espaco">
      <div class="nosso-espaco">  
        <div class="card" style="width: 400px; top: 5%;">
          <img src="assets/img/local1.jpg" class="card-img-bottom" alt="...">
          <div class="card-body lado-direito">
            <p class="card-text">Nosso espaço consiste em diversas baias para os seus pets!</p>
          </div>
        </div>
        <div class="card" style="width: 400px; top: 5%;">
          <img src="assets/img/local2.jpg" class="card-img-bottom" alt="...">
          <div class="card-body lado-direito">
            <p class="card-text">Gatis, viveiros, áreas para os pássaros, dentre diversas e diversas outras formas de abrigar nossos amiguinhos</p>
          </div>
        </div>
        <div class="card" style="width: 400px; top: 5%;">
          <img src="assets/img/local3.jpg" class="card-img-bottom" alt="...">
          <div class="card-body lado-direito">
            <p class="card-text">Você pode nos fazer uma visita para conhecer o local onde seu amigo vai estar, saber como nós trabalhamos e muito mais!</p>
          </div>
        </div>
        <!-- <img src="assets/img/dog-espaco.png" alt="" class="dog-espaco"> -->
      </div>
    </section>
    <section id="carrossel"> <!-- CARROSSEL DE DEPOIMENTOS -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="quadrado">
            <div class="perildono"></div>
            <h2 class="dono">Patricia:</h2>
            <br>
            <br>
            <br>
            <p class="textoquadrado">
              Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            </p>
        </div>
          <img src="assets/img/breeds.png" class="d-block w-50" alt="..." style="height: 400px">
        </div>
        <div class="carousel-item">
        <div class="quadrado">
            <div class="perildono"></div>
            <h2 class="dono">Eduardo:</h2>
            <br>
            <br>
            <br>
            <p class="textoquadrado">
              Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            </p>
        </div>
          <img src="assets/img/tongue.png" class="d-block w-50" alt="..." style="height: 600px">
        </div>
        <div class="carousel-item">
        <div class="quadrado">
            <div class="perildono"></div>
            <h2 class="dono">Rodrigo:</h2>
            <br>
            <br>
            <br>
            <p class="textoquadrado">
              Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            </p>
        </div>
          <img src="assets/img/bulldog.png" class="d-block w-50" alt="..." style="height: 400px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </section>


    <footer>
        ©Copyright - <strong>Desenvolvedores:</strong><br>
        <a href="https://github.com/andrecurvit/"><img src="assets/img/Andre.png" alt="(Foto Andre Almeida)" class="imgdevs"> Andre Almeida</a><br> 
        <a href="https://github.com/EduardoShodi"><img src="assets/img/Eduardo.png" alt="(Foto Eduardo Sagaiama)" class="imgdevs"> Eduardo Sagaiama</a><br>
        <p><a href="#">Termos de serviço.</a></p>
    </footer>
    <script src="assets/js/mobile-navbar.js"></script>
</body>
</html>