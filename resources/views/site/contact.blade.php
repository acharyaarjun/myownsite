@extends('site.template', ['activePage' => 'contact'])
@section('content')
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
                                    <input type="text" id="subject" class="form-control" placeholder="Subject"
                                        required>
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
@endsection
