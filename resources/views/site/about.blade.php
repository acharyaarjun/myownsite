@extends('site.template', ['activePage' => 'about'])
@section('content')
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
@endsection