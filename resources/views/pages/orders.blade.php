<!doctype html>
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
    {{-- Navbar --}}    
    <x-navbar/>

    {{-- Search Start--}}
    <div class="search-bar container">
      <form class="d-flex" action="{{ route('pages.orders') }}" method="GET">
        <input 
          class="form-control me-2" 
          type="search" 
          name="search" 
          placeholder="Cari produk..."
          value="{{ request('search') }}"
        >
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    {{-- Search End --}}

    {{-- Tab Orders Start--}}
    <div class="container">
        <ul class="nav nav-pills mb-3 justify-content-center custom-tabs" id="pills-tab" role="tablist">
          <li class="nav-item" role="all-products">
              <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All Products</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Makanan</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Minuman</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Snack</button>
          </li>
      </ul>

      @if($products->isEmpty())
        <p class="text-center mt-3 fs-5">Produk tidak ditemukan 😢</p>
      @endif   

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
          <div class="row">
            {{-- Card Menu 1 --}}
            @foreach ($products as $item)            
              <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                  <img src="{{ asset($item->gambar) }}" class="card-img-top" style="height: 20rem; object-fit: cover;" alt="Product Image">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $item->nama }}</h5>
                    {{-- <p class="card-text text-muted">{{ $item->deskripsi }}</p> --}}
                    <p class="card-text fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }} <span class="text-muted">Stok: {{ $item->stok }}</span></p>
                    <a href="{{ route('products.show', $item->id) }}" class="btn btn-warning rounded-pill px-4">Add</a>
                  </div>
                </div>
              </div>   
            @endforeach                 
          </div>         
     
        </div>


        <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="row">
            {{-- Card Menu 1 --}}
            @foreach ($makanan as $item)
              <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                  <img src="{{ asset($item->gambar) }}" class="card-img-top" style="height: 20rem; object-fit: cover;" alt="Product Image">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $item->nama }}</h5>
                    {{-- <p class="card-text text-muted">{{ $item->deskripsi }}</p> --}}
                    <p class="card-text fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }} <span class="text-muted">Stok: {{ $item->stok }}</span></p>
                    <a href="{{ route('products.show', $item->id) }}" class="btn btn-warning rounded-pill px-4">Add</a>
                  </div>
                </div>
              </div>   
            @endforeach        
          </div>     
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="row">
            {{-- Card Menu 1 --}}
            @foreach ($minuman as $item)
              <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                  <img src="{{ asset($item->gambar) }}" class="card-img-top" style="height: 20rem; object-fit: cover;" alt="Product Image">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $item->nama }}</h5>
                    {{-- <p class="card-text text-muted">{{ $item->deskripsi }}</p> --}}
                    <p class="card-text fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }} <span class="text-muted">Stok: {{ $item->stok }}</span></p>
                    <a href="{{ route('products.show', $item->id) }}" class="btn btn-warning rounded-pill px-4">Add</a>
                  </div>
                </div>
              </div>   
            @endforeach        
          </div>      
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="row">
            {{-- Card Menu 1 --}}
            @foreach ($snack as $item)
              <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                  <img src="{{ asset($item->gambar) }}" class="card-img-top" style="height: 20rem; object-fit: cover;" alt="Product Image">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $item->nama }}</h5>
                    {{-- <p class="card-text text-muted">{{ $item->deskripsi }}</p> --}}
                    <p class="card-text fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }} <span class="text-muted">Stok: {{ $item->stok }}</span></p>
                    <a href="{{ route('products.show', $item->id) }}" class="btn btn-warning rounded-pill px-4">Add</a>
                  </div>
                </div>
              </div>   
            @endforeach        
          </div>      
        </div>
      </div>               

    </div>
    {{-- Tab Orders End --}}
   
    </div>


    {{-- script JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script>
      // Modal Product Logic
      var productModal = document.getElementById('productModal')
      productModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var id = button.getAttribute('data-id') 
        var nama = button.getAttribute('data-nama')
        var harga = button.getAttribute('data-harga')
        var deskripsi = button.getAttribute('data-deskripsi')
        var gambar = button.getAttribute('data-gambar')

        var modalTitle = productModal.querySelector('.modal-title')
        var modalImage = productModal.querySelector('#modalImage')
        var modalDeskripsi = productModal.querySelector('#modalDeskripsi')
        var modalHarga = productModal.querySelector('#modalHarga')

        modalTitle.textContent = nama
        modalImage.src = gambar
        modalDeskripsi.textContent = deskripsi
        modalHarga.textContent = 'Rp ' + harga
        modalId.value = id

        productModal.querySelector('input[name="id"]').value = id
        productModal.querySelector('input[name="nama"]').value = nama
        productModal.querySelector('input[name="harga"]').value = harga
        productModal.querySelector('input[name="gambar"]').value = gambar
      })


      // Quantity Selector Logic
        const decreaseBtn = document.getElementById('decreaseQty');
        const increaseBtn = document.getElementById('increaseQty');
        const qtyInput = document.getElementById('quantityInput');

        decreaseBtn.addEventListener('click', () => {
          let value = parseInt(qtyInput.value);
          if (value > 1) qtyInput.value = value - 1;
        });

        increaseBtn.addEventListener('click', () => {
          let value = parseInt(qtyInput.value);
          qtyInput.value = value + 1;
        });
    </script> --}}

  </body>

</html>
