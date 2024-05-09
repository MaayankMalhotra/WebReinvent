<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Product</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional Custom Styles */
        body {
            margin: 20px;
        }
        .container {
            max-width: 400px;
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a Task</h1>
        <div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form method="post" action="{{ route('product.store') }}">
            @csrf 
            @method('post')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" />
            </div>
            <div class="form-group">
                <label for="qty">Quantity</label>
                <input type="text" id="qty" name="qty" class="form-control" placeholder="Quantity" />
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="form-control" placeholder="Price" />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control" placeholder="Description" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save a New Product" />
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
