<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”keywords” content=”HTML5, CSS3, Javascript”>    
    <link rel="stylesheet" type="text/css" href="css/barraNav.css">
    <link rel="stylesheet" type="text/css" href="css/acerca.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
<!-- Barra de navegacion -->
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">        
        <span class="text-white fs-3 fw-bold" ><img src="img/logo.png" alt="" width="100" height="100">Hermanas paez</span>
    </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.blade.php">
              <span class="fs-5">Inicio</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="productos.blade.php">
              <span class="fs-5">Productos</span>
            </a>
        </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contactanos.blade.php">
                <span class="fs-5">Contactanos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Acercade.blade.php">
                <span class="fs-5">Acerca de</span>
            </a>
          </li>
      </ul>
    </div>
  </div>
   <a class="navbar-brand" href="#">
    <span class="text-white fs-3 fw-bold text-right" id="catalogo">Tienda de abarrotes</span>
   </a>
</nav>

<!-- Carrusel de imagenes -->
 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="img/carrusel/carrusel1.jpg" class="d-block w-100" alt="Imagen 1" width="640" height="600">
      </div>

      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/carrusel/carrusel2.png" class="d-block w-100" alt="imagen 2" width="640" height="600">
      </div>

      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/carrusel/carrusel3.jpg" class="d-block w-100" alt="imagen 3" width="640" height="600">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
 </div>

  <!-- Intro -->
   <section class="w-50 mx-auto text-center pt-5"id="intro">
      <h1 class="text-primary p-3 fs-2 border-top border-4">Extenso, Innovador y Exclusivo surtido de los mejores productos para tu hogar<span></span></h1>
      <p><span></span></p>
   </section>

  <!-- Categorias -->
   <section class="container-fluid ">
      <div class="row w-75 mx-auto border-bottom border-4 servicio-fila">

          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
              <img src="img/categorias/lacteos.jpg" alt="Escolares" width="180" height="160">
              <div>
                  <a href="productoEscolares.php" style="text-decoration: none;"><h3 class="text-success fs-2 mt-4 px-4 pb-1">Lacteos</h3></a>
                  <p class="px-4 fs-5">Los lácteos son productos derivados de la leche, como leche, queso, yogur y mantequilla. Son una fuente importante de nutrientes esenciales como calcio, proteínas y vitaminas. En nuestra tienda de abarrotes, ofrecemos una amplia variedad de lácteos frescos y de alta calidad.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/aseo.png" alt="Escolares" width="180" height="160">
            <div>
            <a href="productosOficina.php" style="text-decoration: none;"><h3 class="text-primary fs-2 mt-4 px-4 pb-1">Cuidado y aseo personal</h3></a>
                <p class="px-4 fs-5">En nuestra sección de cuidado y aseo personal, encontrarás una amplia variedad de productos para ayudarte a mantener una higiene adecuada y una apariencia fresca y saludable.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/abarrotes.png" alt="Escolares" width="180" height="160">
            <div>
            <a href="productoManualidades.php" style="text-decoration: none;"><h3 class="text-warning fs-2 mt-4 px-4 pb-1">Abarrotes</h3></a>
                <p class="px-4 fs-5">En nuestra sección de abarrotes, encontrarás una amplia variedad de productos esenciales para tu hogar y cocina. </p>
          </div>
        </div>
      </div>
      <div class="row w-75 mx-auto border-bottom border-4 servicio-fila">
        
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
              <img src="img/categorias/bebidas.png" alt="Escolares" width="180" height="160">
              <div>
                  <a href="productoEscolares.php" style="text-decoration: none;"><h3 class="text-success fs-2 mt-4 px-4 pb-1">Bebidas y licores</h3></a>
                  <p class="px-4 fs-5">En nuestra sección de bebidas y licores, encontrarás una amplia variedad de bebidas refrescantes, jugos naturales, cervezas, vinos y licores para todas las ocasiones. </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/limpieza.jpg" alt="Escolares" width="180" height="160">
            <div>
            <a href="productosOficina.php" style="text-decoration: none;"><h3 class="text-primary fs-2 mt-4 px-4 pb-1">limpieza para el hogar </h3></a>
                <p class="px-4 fs-5">En nuestra sección de limpieza del hogar, encontrarás una amplia variedad de productos para mantener tu hogar limpio y ordenado.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/farmacia.png" alt="Escolares" width="180" height="160">
            <div>
            <a href="productoManualidades.php" style="text-decoration: none;"><h3 class="text-warning fs-2 mt-4 px-4 pb-1">Farmacia</h3></a>
                <p class="px-4 fs-5">En nuestra sección de farmacia, encontrarás una amplia variedad de productos para el cuidado de la salud y el bienestar. Ofrecemos una selección de medicamentos de venta libre.</p>
          </div>
        </div>
      </div>
      
   </section>

  <!-- backgrond pie de la pagina -->

   <section id="seccion-contactos">
      <div id="bg-contactos">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000b76" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,170.7C384,171,480,213,576,208C672,203,768,149,864,149.3C960,149,1056,203,1152,218.7C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
   </section>

  <!-- Pie de pagina -->
   <footer class="w-100  justify-content-center ">
      <p class="fs-5 px-3 pt-3">Hermanas Paez &copy; Todos los derechos reservados 2023</p>
      <div id="iconos">
          <a href="https://www.facebook.com"><i class="bi bi-facebook"></i></i></i></a>
          <a href="#"><i class="bi bi-twitter"></i></i></i></a>
          <a href="#"><i class="bi bi-instagram"></i></i></i></a>
      </div>
   </footer>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

