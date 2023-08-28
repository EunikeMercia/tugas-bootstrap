<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <style>
        * {
            font-family: Poppins;
        }
    </style>
    <!-- {NAVBAR} -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#DC0000;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-4 text-light" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active fs-5 text-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link fs-5 text-light" href="/menu">Menu</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <p class="text-body-secondary">© 2023</p>
            </div>

            <div class="col mb-3">

            </div>
            <div class="col mb-3">

            </div>

            
            <div class="col mb-3">
                <h5>ABOUT US</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Brand Story</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">CSR</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Menu</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Outlet Locations</a></li>
                </ul>
            </div>
            
            <div class="col mb-3">
            <h5>SERVICE & POLICIES</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact Us</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Privacy Policy</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Terms of use</a></li>
            </ul>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>