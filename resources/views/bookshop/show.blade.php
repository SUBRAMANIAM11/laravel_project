<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row ">
        <div class=" col-12 col-sm-6  col-md-4 my-5">
            <div class="card mx-auto" style="width: 18rem;">
              <form action="/bookshop/{{$book->id}}/show" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <h5 class="card-title">{{$book->name}}</h5>
                  <p class="card-text">{{$book->author}}</p>
                  </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-danger">{{$book->price}}</li>
                </ul>
                <img src="{{$book->image}}" class="card-img-top rounded" width="100%">
              </form>
                </div>
                </div>
</body>
</html>