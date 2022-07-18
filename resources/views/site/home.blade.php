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
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        {{-- navbar section end here --}}

        {{-- slider section starts here --}}
        <section id="slider">
            <div class="container-fluid">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('site/image/slider1.jpg') }}" class="d-block w-100" alt="Slider One">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('site/image/slider2.jpg') }}" class="d-block w-100" alt="Slider Two">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('site/image/slider3.jpg') }}" class="d-block w-100" alt="Slider Three">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </section>
        {{-- slider section ends here --}}

        {{-- about us section starts here --}}
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h6>About Us</h6>
                            <h2>who we are</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('site/image/bg.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, excepturi dolorum odio minima
                                molestiae saepe similique ducimus hic unde. Esse quam minus minima adipisci odit magnam quia
                                laudantium voluptates expedita necessitatibus dolore harum, aliquam culpa ipsa eaque,
                                numquam provident at quisquam earum amet inventore aliquid nulla, eveniet atque. Quidem
                                dignissimos veritatis eveniet ipsam eos, ex animi in modi officiis ea provident delectus
                                illo, laborum earum! Ducimus praesentium totam error laborum omnis architecto lrome lorem
                                lrome
                            </p>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- about us section ends here --}}

        {{-- service section starts here --}}
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h6>Service</h6>
                            <h2>what we do</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box">
                            <i class="fas fa-laptop-code icon"></i>
                            <h4>Web Development</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est saepe aperiam odit, minima
                                in eligendi quas nesciunt pariatur rerum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <i class="fas fa-mobile icon"></i>
                            <h4>Responsive Design</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est saepe aperiam odit, minima
                                in eligendi quas nesciunt pariatur rerum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <i class="fas fa-code icon"></i>
                            <h4>Clean Code</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est saepe aperiam odit, minima
                                in eligendi quas nesciunt pariatur rerum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <i class="fas fa-image icon"></i>
                            <h4>Graphics Design</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est saepe aperiam odit, minima
                                in eligendi quas nesciunt pariatur rerum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <i class="fas fa-search icon"></i>
                            <h4>seo marketing</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est saepe aperiam odit, minima
                                in eligendi quas nesciunt pariatur rerum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <i class="fas fa-cloud icon"></i>
                            <h4>Cloud service</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est saepe aperiam odit, minima
                                in eligendi quas nesciunt pariatur rerum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- service section ends here --}}

        {{-- our class section starts here --}}
        <section id="our-class">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h6>Class</h6>
                            <h2>what we teach</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="class-box">
                            <h4><span>"</span>Web Development<span>"</span></h4>
                            <h6>(3 months)</h6>
                            <p>Rs 10000/-</p>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem, ipsum dolor.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem, ipsum dolor.</li>
                            </ul>
                            <a href="#" class="btn form-control">Enroll now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="class-box">
                            <h4>Web Development</h4>
                            <h6>(3 months)</h6>
                            <p>Rs 10000/-</p>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem, ipsum dolor.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem, ipsum dolor.</li>
                            </ul>
                            <a href="#" class="btn form-control">Enroll now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="class-box">
                            <h4><span>"</span>Web Development<span>"</span></h4>
                            <h6>(3 months)</h6>
                            <p>Rs 10000/-</p>
                            <ul>
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem, ipsum dolor.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem, ipsum dolor.</li>
                            </ul>
                            <a href="#" class="btn form-control">Enroll now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- our class section ends here --}}

        {{-- contact section starts here --}}
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h6>Contact Us</h6>
                            <h2>get in touch</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-box">
                            <i class="fas fa-location icon"></i>
                            <h4>Location</h4>
                            <p>
                                Pokhara-8, Srijana Chowk
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box">
                            <i class="fas fa-phone icon"></i>
                            <h4>Phone</h4>
                            <p>
                                061-538358, +977-9876543210
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box">
                            <i class="fas fa-message icon"></i>
                            <h4>Email</h4>
                            <p>
                                info@myownsite.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullname"></label>
                                        <input type="text" id="fullname" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"></label>
                                        <input type="email" id="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject"></label>
                                        <input type="text" id="subject" class="form-control" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="message"></label>
                                        <textarea id="message" class="form-control" rows="7" required style="height: 196px" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="submit" value="submit form" class="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- contact section ends here --}}

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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas soluta reiciendis ipsum quam pariatur illum nemo velit quia necessitatibus eaque ducimus, numquam quisquam quaerat ipsa debitis quibusdam non architecto error.
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



        <script src="{{ asset('site/js/jquery.js') }}"></script>
        <script src="{{ asset('site/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('site/fontawesome/js/all.js') }}"></script>
        <script src="{{ asset('site/js/script.js') }}"></script>
    </body>

    </html>
