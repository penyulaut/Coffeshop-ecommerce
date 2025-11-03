<!doctype html>
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
    {{-- Navbar --}}    
    <x-navbar/>

    {{-- Search Start--}}
    <div class="search-bar container">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
                    <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#productModal" 
                      data-nama="{{ $item->nama }}" 
                      data-harga="{{ $item->harga }}" 
                      data-deskripsi="{{ $item->deskripsi }}"
                      data-gambar="{{ asset($item->gambar) }}">
                      Add
                    </a>
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
                    <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#productModal" 
                      data-nama="{{ $item->nama }}" 
                      data-harga="{{ $item->harga }}" 
                      data-deskripsi="{{ $item->deskripsi }}"
                      data-gambar="{{ asset($item->gambar) }}">
                      Add
                    </a>
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
                    <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#productModal" 
                      data-nama="{{ $item->nama }}" 
                      data-harga="{{ $item->harga }}" 
                      data-deskripsi="{{ $item->deskripsi }}"
                      data-gambar="{{ asset($item->gambar) }}">
                      Add
                    </a>
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
                    <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#productModal" 
                      data-nama="{{ $item->nama }}" 
                      data-harga="{{ $item->harga }}" 
                      data-deskripsi="{{ $item->deskripsi }}"
                      data-gambar="{{ asset($item->gambar) }}">
                      Add
                    </a>
                  </div>
                </div>
              </div>   
            @endforeach        
          </div>      
        </div>
      </div>
           

      <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content shadow-lg border-0 rounded-4 overflow-hidden">
              
              <!-- Header -->
              <div class="modal-header text-white border-0">
                <h5 class="modal-title fw-bold" id="productModalLabel">Nama Produk</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- Body -->
              <div class="modal-body p-4">
                <div class="row align-items-center">
                  
                  <div class="col-md-5 text-center mb-3 mb-md-0">
                    <img src="" id="modalImage" class="img-fluid rounded-3 shadow-sm" alt="Product Image" style="max-height: 230px; object-fit: cover;">
                  </div>
                  <!-- Gambar Produk -->

                  <!-- Detail Produk -->
                  <div class="col-md-7">
                    <p id="modalDeskripsi" class="text-secondary mb-3"></p>
                    <h4 id="modalHarga" class="fw-bold text-dark mb-4"></h4>

                    <!-- Quantity Selector -->
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-4">
                      <label for="quantityInput" class="me-3 fw-semibold text-secondary">Quantity:</label>
                      <div class="input-group" style="width: 130px;">
                        <button class="btn btn-outline-secondary" type="button" id="decreaseQty">−</button>
                        <input type="number" id="quantityInput" class="form-control text-center" value="1" min="1">
                        <button class="btn btn-outline-secondary" type="button" id="increaseQty">+</button>
                      </div>
                    </div>

                    <!-- Tombol -->
                    <div class="d-flex justify-content-center justify-content-md-start">
                      <button type="button" class="btn btn-secondary rounded-pill px-4 me-2" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-warning rounded-pill px-4 fw-semibold">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>
    {{-- Tab Orders End --}}
   
    </div>


    {{-- script JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      // Modal Product Logic
      var productModal = document.getElementById('productModal')
      productModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
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
    </script>

  </body>

</html>
