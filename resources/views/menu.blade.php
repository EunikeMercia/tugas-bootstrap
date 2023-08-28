@extends('template')

@section('title', 'Home')

@section('content')
    <div class="container my-5">
        <div class="title p-5 d-flex justify-content-left">
            <h1 class="text-center fw-bold">MENU</h1>
        </div>
        <div class="title d-flex justify-content-left">
            <h1 class="text-center fw-normal">Filter</h1>
        </div>
        <div class="d-flex gap-5">
            <div class="card" style="width: 25%;">
                <div class="card-body">
                <div class="div">
                    <a class="fs-4 btn btn-light w-100 mb-1">All</a>
                </div>
                <div class="div">
                    <a class="fs-4 btn btn-light w-100 mb-1">Beverage</a>
                </div>
                <div class="div">
                    <a class="fs-4 btn btn-light w-100 mb-1">Burger</a>
                </div>
                <div class="div">
                    <a class="fs-4 btn btn-light w-100 mb-1">Chicken</a>
                </div>
                <div class="div">
                    <a class="fs-4 btn btn-light w-100 mb-1">Meal</a>
                </div>
                </div>
            </div>
            <div class="div">
                <div class="div p-3 d-flex justify-content-end gap-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btn-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Popularity
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">A-Z</a></li>
                            <li><a class="dropdown-item" href="#">Rating</a></li>
                            <li><a class="dropdown-item" href="#">Price</a></li>
                        </ul>
                    </div>
                    <div class="div">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="https://asset.kompas.com/crops/lh65swq0V41pXSCA2NyCXHdny2o=/0x0:1000x667/750x500/data/photo/2021/06/10/60c16f785871d.jpg" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="150">
                            <div class="card-body">
                            <p class="card-text">Chicken Nugget</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="https://cdn0-production-images-kly.akamaized.net/oIN3wVed8tEnm39rmcJtHo7D0eA=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/970871/original/021248500_1440846143-header_chiantilvpa_com.jpg" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="150">
                            <div class="card-body">
                            <p class="card-text">French Fries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="https://asset.kompas.com/crops/fP_Q5TD9BOn5G5JTnntgtDIjQMI=/53x36:933x623/750x500/data/photo/2021/10/21/6171492e1ea12.jpg" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="150">
                            <div class="card-body">
                            <p class="card-text">Burger</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="https://asset.kompas.com/crops/jaXImAo6dLcT4P8DVG-P0eGQHqg=/100x67:900x600/750x500/data/photo/2022/06/01/62970a088716d.jpg" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="150">
                            <div class="card-body">
                            <p class="card-text">Chicken WIngs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection