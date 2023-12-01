<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <title>Document</title>
</head>
<style>
    .nav-link{
       color: rgb(12, 12, 19);
    }
    .navbar-nav{
    padding-left:400px;
    }
    .d-block{
      height: 600px;
    }
</style>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" style="padding-left: 100px" href=""><span class="bi bi-book"></span>Bookly</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
            <form class="d-flex">
              <input class="form-control me-2" style="margin-left: 370px" type="text" placeholder="Search">
              <button class="btn btn-primary"  type="button"><i class="bi bi-search"></i></button>
            </form>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav" >
                  <li class="nav-item">
                    <a class="nav-link"  href="#"><span class="bi bi-heart dark"></span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><span class="bi bi-cart-check"></span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/"><span class="bi bi-person-fill"></span></a>
                  </li>
                </ul>
          </div>
        </div>
      </nav>
      {{-- top nav-bar end --}}
      <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left: 100px">
            <ul class="navbar-nav " >
              <li class="nav-item ">
                <a class="nav-link active text-light " aria-current="page" href="#">Home |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#feature">Features |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Pricing |</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- second nav-bar end --}}
      <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/library.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Welcome</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/book.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Crime Novels</h3>
        <p>Suspecting</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="./images/comics.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Comics</h3>
        <p>For All</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="./images/jk.jpeg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Harry Potter</h3>
        <p>All Series</p>
      </div> 
    </div>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div><br>
{{-- end carousal --}}

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

<div class="container-fluid">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <h5 class="navbar-brand" style="padding-left:650px" id="feature">Featured Book</h5>
    <a href="/bookshop/add" class="bi bi-file-plus" style="padding-right:20px">Add-books</a>
  </div>
</nav>
{{-- end nav --}}

  <div class="row ">

    @foreach ($books as $book)
    
  <div class=" col-12 col-sm-6  col-md-4 my-5">

      <div class="card mx-auto" style="width: 18rem;">
          <img src="./images/{{$book->image}}" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">{{$book->bookname}}</h5>
            <p class="card-text">{{$book->author}}</p>
            </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item text-danger">{{$book->price}}</li>
          <div class="mb-3">
            <div class="d-grid">
              <a class="btn btn-info" href="/bookshop/{{$book->id}}/edit" role="button">Edit</a>

              <form method="POST" action="/bookshop/{{$book->id}}/delete">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>  
                  </form>
                </ul>
            </div>
        </div>
    </div>
    @endforeach

          </div>
          </div>
        
  </div>
</body>
</html>