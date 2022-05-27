<!DOCTYPE html>
<html>
<head>
	<!-- Para ver o arquivo no google é necessario liga as duas primeiras opções do app xampp -->
	<!-- Para não ver o código e ver somente o site é só apagar tudo até a pasta que esta localizado o arquivo ( nesse caso vem normalmente: file:///C:/xampp/htdocs/php-03/01/index.php e será apagado o file:///C:/xampp/htdocs , ficando só o /php-03/01/index.php) e colocando o localhost no luagr (no exemplo a cima fica http://localhost/php-03/01/index.php) -->
	<title>Aula Boostrap e PHP ::: Aula 03</title>
	<!-- Boostrap -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- /CSS only -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- /JavaScript Bundle with Popper -->
	<!-- /Boostrap -->
	<!-- css -->
	<link rel="stylesheet" href="style.css">
	<!-- /css -->
</head>
<body>
	<!-- nav -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#">Inserir a marca</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        		<li class="nav-item">
          		<a class="nav-link active" aria-current="page" href="#">Home</a>
        		</li>
        		<li class="nav-item">
          		<a class="nav-link" href="#">Empresa</a>
        		</li>
        		<li class="nav-item dropdown">
          		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servisos</a>
          		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            	<li><a class="dropdown-item" href="#">Sites</a></li>
            	<li><a class="dropdown-item" href="#">Mobile</a></li>
            	<li><a class="dropdown-item" href="#">Sistema Desktop</a></li>
          		</ul>
        		</li>
        		<li class="nav-item">
          		<a class="nav-link">Fale Conosco</a>
        		</li>
      			</ul>
      			<form class="d-flex" role="search">
        			<input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        			<button class="btn btn-outline-success" type="submit">Pesquisar</button>
      			</form>
    		</div>
  		</div>
	</nav>
	<!-- /nav -->
	<!-- Slide -->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  		<div class="carousel-indicators">
    		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  		</div>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img src="imagem/img-01.jpg" class="d-block w-100" alt="...">
    		</div>
    		<div class="carousel-item">
      			<img src="imagem/img-02.jpg" class="d-block w-100" alt="...">
    		</div>
    		<div class="carousel-item">
     			<img src="imagem/img-03.jpg" class="d-block w-100" alt="...">
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
	<!-- /Slide -->
	<!-- main -->
	<main>
		<div class="container mt-5">
			<div class="row row-cols-1 row-cols-md-2 g-4">
  				<div class="col">
    				<div class="card">
      					<img src="imagem/img-07.jpg" class="card-img-top" alt="...">
      					<div class="card-body">
        					<h5 class="card-title">Card title</h5>
        					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      					</div>
    				</div>
  				</div>
  				<div class="col">
    				<div class="card">
      					<img src="imagem/img-05.jpg" class="card-img-top" alt="...">
     						<div class="card-body">
        						<h5 class="card-title">Card title</h5>
        						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      						</div>
    					</div>
  					</div>
  					<div class="col">
    					<div class="card">
      						<img src="imagem/img-06.jpg" class="card-img-top" alt="...">
      						<div class="card-body">
        						<h5 class="card-title">Card title</h5>
        						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      						</div>
    					</div>
  					</div>
  				<div class="col">
    		<div class="card">
      			<img src="imagem/img-07.jpg" class="card-img-top" alt="...">
      				<div class="card-body">
        				<h5 class="card-title">Card title</h5>
        				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      				</div>
    			</div>
  			</div>
		</div>
		</div>
	</main>
	<!-- /main -->
	<!-- footer -->
	<footer class="mt-5">
		<div class="container">
			Todos os direitos reservados. &copy 2022.
		</div>
	</footer>
	<!-- /footer -->
</body>
</html>