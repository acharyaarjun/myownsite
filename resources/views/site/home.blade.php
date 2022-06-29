<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My | Own | Website</title>
    <link rel="stylesheet" href="{{ asset('site/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('site/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
</head>
<body>

    {{-- top header starts here --}}
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12 col-12 text-center text-lg-left">
                    <div class="header-contact">
                        <i class="fas fa-location-arrow"></i> pokhara -8, srijana chowk &nbsp;&nbsp;&nbsp;
                        <i class="fas fa-phone"></i> 098-7654321
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-hiden">
                    <div class="header-icon">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- top header ends here --}}

    {{-- navbar section starts here --}}
    <section id="navbar">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">myOwnSite</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-center ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Our Classes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#" style="border-bottom: 2px solid var(--s-color);">Web Development</a>
                  <a class="dropdown-item" href="#" style="border-bottom: 2px solid var(--s-color);">Mobile Develpment</a>
                  <a class="dropdown-item" href="#">Seo Marketing</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    {{-- navbar section end here --}}

    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('site/fontawesome/js/all.js') }}"></script>
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>
</html>