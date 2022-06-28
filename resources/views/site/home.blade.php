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

    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('site/fontawesome/js/all.js') }}"></script>
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>
</html>