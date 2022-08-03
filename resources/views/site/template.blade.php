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
    @yield('css')
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
                <div class="col-md-6 col-lg-6 col-hidden-sm">
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
    <section id="navbar" class="sticky">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">myOwnSite</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item {{ $activePage == 'home' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('getHome') }}">Home</a>
                        </li>
                        <li class="nav-item {{ $activePage == 'about' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('getAbout') }}">About</a>
                        </li>
                        <li class="nav-item {{ $activePage == 'service' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('getService') }}">Service</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Our Classes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"
                                    style="border-bottom: 2px solid var(--s-color);">Web Development</a>
                                <a class="dropdown-item" href="#"
                                    style="border-bottom: 2px solid var(--s-color);">Mobile Develpment</a>
                                <a class="dropdown-item" href="#">Seo Marketing</a>
                            </div>
                        </li>
                        <li class="nav-item {{ $activePage == 'contact' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('getContact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    {{-- navbar section end here --}}

    @yield('content')

    {{-- footer section starts here --}}
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-about">
                        <a href="">
                            MyOwnSite
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas soluta reiciendis ipsum
                            quam pariatur illum nemo velit quia necessitatibus eaque ducimus, numquam quisquam quaerat
                            ipsa debitis quibusdam non architecto error.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="quick-links">
                        <h4>quick links</h4>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Service</a></li>
                            <li><a href="">Our Class</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="quick-links">
                        <h4>Our Classes</h4>
                        <ul>
                            <li><a href="">Web Development</a></li>
                            <li><a href="">Mobile Development</a></li>
                            <li><a href="">Seo Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-contact">
                        <h4>Contact</h4>
                        <p><i class="fas fa-location"></i>&nbsp; Pokhara-8, Srijana Chowk</p>
                        <p><i class="fas fa-phone"></i>&nbsp; 9876543210</p>
                        <p><i class="fas fa-message"></i>&nbsp; info@myownsite.com</p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 footer-icon">
                    <a href="" class="icon"><i class="fab fa-facebook"></i></a>
                    <a href="" class="icon"><i class="fab fa-twitter"></i></a>
                    <a href="" class="icon"><i class="fab fa-instagram"></i></a>
                    <a href="" class="icon"><i class="fab fa-facebook"></i></a>
                    <a href="" class="icon"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="col-md-12 text-center">
                    copyright &copy; my own site.
                </div>
            </div>
        </div>
    </section>
    {{-- footer section ends here --}}


    <!-- Modal -->
    @if (Session::has('status'))
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content bg-success">

                    <div class="modal-body">
                        <div class="container-fluid text-center text-light">
                            {{ Session::get('status') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif



    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('site/fontawesome/js/all.js') }}"></script>
    <script src="{{ asset('site/js/script.js') }}"></script>
    <script>
        $('#modelId').modal('show');
    </script>
    @yield('js')

</body>

</html>
