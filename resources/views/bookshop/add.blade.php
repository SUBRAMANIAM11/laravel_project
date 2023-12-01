<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add books</title>
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Add Books</h1>
                </div>
                <div class="card-body">
                 
                    <form action="/bookshop/insert" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name of Book</label>
                            <input type="text" name="bookname" class="form-control"  placeholder="Enter Book Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Author Name</label>
                            <input type="text" name="author" class="form-control"  placeholder="Enter Author Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control"  required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control"  required>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </div>

                    </form>
            </div>
        </div>
    </div>
</body>
</html>