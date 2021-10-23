<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/logo.ico">
    <link rel="stylesheet" type="text/css" href="style_kategori.css">

    <title>Toko Baju Reky.com</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-5">
              <input class="form-control me-2" size="50" type="search" name="" placeholder="Masukkan product atau Brand">
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Product
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Pakaian Dewasa</a></li>
                <li><a class="dropdown-item" href="#">Pakaian Anak - anak</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Product lainnya</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="">
              <button class="btn btn-outline-success" type="submit">Login</button>
            </a>
          </form>
        </div>
      </div>
    </nav>

    <!-- ========================= carousel ============================== -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/banner0.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/banner1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/banner2.png" class="d-block w-100" alt="...">
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



<!--  ================================= section product ================================ -->
<section class="product">
  <div class="container">
    
    <div class="row judul">
      <h2>PAKAIAN DEWASA</h2>
    </div>

    <div class="row product2">

      <div class="col-md-4">
        <div class="card bg-light">
          <img src="img/Kategori/pakaian_dewasa.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pakaian Dewasa</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#"><button class="btn btn-primary">Lihat Product</button></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-light">
          <img src="img/Kategori/pakaian_anak.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pakaian Anak - anak</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#"><button class="btn btn-primary">Lihat Product</button></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-light">
          <img src="img/Kategori/pakaian_bayi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pakaian Bayi</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#"><button class="btn btn-primary">Lihat Product</button></a>
          </div>
        </div>
      </div>
    
    </div>

  </div>
</section>
<!--  ================================= End section product ============================ -->


<!-- =============================== start Footer =============================== -->

<footer class="bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>&copy; Copyright 2021 | Haltev</p>
      </div>
    </div>
  </div>
</footer>

<!-- =============================== End Footer =============================== -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>