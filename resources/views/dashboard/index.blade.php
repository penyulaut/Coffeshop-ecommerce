<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Hello, world!</title>
  </head>
<body>
  <x-navbar/>

  <!-- Main Content -->
  <div class="search-bar container">
    <nav class="navbar mb-4 px-3">
      <span class="navbar-brand fw-bold text-light">Dashboard Admin</span>
      <a href="/beranda/dashboard/create" class="btn btn-warning">Tambah data</a>
    </nav>

    <div class="table-container">
      <h5 class="mb-3">Data Produk</h5>

      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>       
      @endif

      @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endforeach
            </ul>
        </div>          
      @endif

      <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark text-center">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($products as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->deskripsi}}</td>
            <td>Rp {{$item->harga}}</td>
            <td>{{$item->category_id}}</td>
            <td>
              <button class="btn btn-sm btn-primary">
                <a href="{{ route('dashboard.edit', ['id'=>$item->id]) }}" class="text-light">Edit</a>                
              </button>
              <button class="btn btn-sm btn-danger">Hapus</button>
            </td>
          </tr> 
        @endforeach         
        </tbody>        
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
