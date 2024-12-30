<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Health Hub</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2 style="color:green;">Health <em style="color:blue;">Hub</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
            @if (Route::has('login'))
              @auth
                    <x-app-layout>

                    </x-app-layout>
              @else
                <li>
                  <a class="nav-link" href="{{ route('login') }}">Log in</a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
              @endauth
            @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Section -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <!-- Banner Item 1 -->
      <div class="banner-item-01">
        <div class="text-content">
          <h4 style="color:blue;">Best Offer</h4>
          <h2>New Arrivals On Sale</h2>
        </div>
      </div>
      <!-- Banner Item 2 -->
      <div class="banner-item-02">
        <div class="text-content">
          <h4>Flash Deals</h4>
          <h2>Get your best products</h2>
        </div>
      </div>
      <!-- Banner Item 3 -->
      <div class="banner-item-03">
        <div class="text-content">
          <h4>Last Minute</h4>
          <h2>Grab last minute deals</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- More Content -->
  <!-- Omitted for brevity -->

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd. Design by <a href="https://templatemo.com">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>
</body>

</html>
