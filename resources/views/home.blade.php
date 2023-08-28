@extends('template')

@section('title', 'Home')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide mt-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/burger1.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/burger2.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/burger3.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container my-5">
        <div class="title mb-5 d-flex justify-content-center">
            <h1 class="text-center fw-bold">PROMO</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://hargacampur.com/wp-content/uploads/2022/08/Harga-Paket-Happy-Meal-McDonalds-MCD-terbaru.webp" class="bd-placeholder-img card-img-top" width="100%" height="225">
                    <div class="card-body">
                    <p class="card-text fs-2">Promo 17</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">See More</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyNTgKCv8siBq5LFTH0PsI5tmqzXy-qsAkhg&usqp=CAU" class="bd-placeholder-img card-img-top" width="100%" height="225">
                    <div class="card-body">
                    <p class="card-text fs-2">BUY 1 GET 1 COMBO SPESIAL</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">See More</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5 d-flex justify-content-center">
          <button type="button" class="btn btn-lg text-center fw-bold text-light" style="background-color: #DC0000;">Lihat semua promo</button>
        </div>
    </div>
@endsection