<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Hello, world!</title>
  </head>
<body>
    <x-navbar/>
    <div class="container mt-4">
        <div class="search-bar row">
            <div class="col-md-5">
                <img src="{{ asset($product->gambar) }}" class="img-fluid rounded">
            </div>
            <div class="col-md-7">
                <h2>{{ $product->nama }}</h2>
                <p>{{ $product->deskripsi }}</p>
                <h4>Rp {{ number_format($product->harga) }}</h4>

                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="number" name="quantity" value="1" min="1" class="form-control w-25 mb-3">
                    <button type="submit" class="btn btn-success">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>