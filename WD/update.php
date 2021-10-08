<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="../WD/assets/style.css" rel="stylesheet">
    
    <title>College Site</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Clg</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="informationtech.php">Information Technology</a></li>
                <li><a class="dropdown-item" href="mechanical.php">Mechanical Engineering</a></li>
                <li><a class="dropdown-item" href="civil.php">Civil Engineering</a></li>
              </ul>
            </li>
</div>
            
</div>
           
<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="../WD/updateform.php">Update</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../WD/deletedata.php">Delete</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="index.php">LogOut</a>
            </li>

           
        </ul>
          
        </div>
      </div>
    </nav>

    <div class="container form-control">
      
      <div class="row">
        <div class="col-12 carmid">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">  
              <div class="carousel-item active">
                <img src="assets/pexels-meliani-driss-2982449.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/pexels-pixabay-207691 (1).jpg" class="d-block w-100 img2" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/pexels-pixabay-256541 (1).jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
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
        </div>
      </div>
      
    </div>

    <div class="container">
    <h3 class="blog-heading">Students' Blog corner</h3>
    <div class="row">
  <div class="col-sm-6">
    <div class="card card_style">
      <div class="card-body">
        <h5 class="card-title">Blog 1</h5>
        <p class="card-text">This is the first blog of our student Keyur Parmar.</p>
        <a href="#" class="btn btn-primary">Visit Blogs</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card_style">
      <div class="card-body">
        <h5 class="card-title">Blog 2</h5>
        <p class="card-text">This is the first blog of our student Henil Modi.</p>
        <a href="#" class="btn btn-primary">Visit Blogs</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card card_style">
      <div class="card-body">
        <h5 class="card-title">Blog 3</h5>
        <p class="card-text">This is the first blog of our student Vinay Dashlaniya.</p>
        <a href="#" class="btn btn-primary">Visit Blogs</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card_style">
      <div class="card-body">
        <h5 class="card-title">Blog 4</h5>
        <p class="card-text">This is the first blog of our student Harsh Isamalia.</p>
        <a href="#" class="btn btn-primary">Visit Blogs</a>
      </div>
    </div>
  </div>
</div>

</div>


    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-muted">© 2021 College, Inc</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </footer>

    
    <!-- Optional JavaScript; choose one of the two! -->

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
  </body>
</html>
