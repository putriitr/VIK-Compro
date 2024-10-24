@extends('layouts.Member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-secondary">Contact Us</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary pe-3">Quick Contact</h5>
                    </div>
                    <h1 class="display-5 mb-4">Have Questions? Don't Hesitate to Contact Us</h1>
                    <p class="mb-5">For inquiries or further information regarding our products and services, please do
                        not hesitate to contact us. We are here to assist you.</p>
                    <div class="d-flex border-bottom mb-4 pb-4">
                        <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                        <div class="ps-3">
                            <h5>Our Location</h5>
                            <p>Jl. Pal Putih No.193A, Kramat, Senen, Jakarta Pusat 10450</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-xl-6">
                            <div class="d-flex">
                                <i class="fas fa-tty fa-3x text-primary"></i>
                                <div class="ps-3">
                                    <h5 class="mb-3">Quick Contact</h5>
                                    <div class="mb-3">
                                        <h6 class="mb-0">Phone:</h6>
                                        <a href="#" class="fs-5 text-primary">(021) 23951673</a>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="mb-0">Email:</h6>
                                        <a href="#" class="fs-5 text-primary">business@vik.co.id</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex">
                                <i class="fas fa-clone fa-3x text-primary"></i>
                                <div class="ps-3">
                                    <h5 class="mb-3">Opening Hrs</h5>
                                    <div class="mb-3">
                                        <h6 class="mb-0">Mon - Friday:</h6>
                                        <a href="#" class="fs-5 text-primary">09.00 am to 07.00 pm</a>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="mb-0">Satday:</h6>
                                        <a href="#" class="fs-5 text-primary">10.00 am to 05.00 pm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <div class="me-4">
                            <div class="bg-light d-flex align-items-center justify-content-center"
                                style="width: 90px; height: 90px; border-radius: 10px;"><i
                                    class="fas fa-share fa-3x text-primary"></i></div>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-secondary border-secondary me-2 p-0" href="">facebook <i
                                    class="fas fa-chevron-circle-right"></i></a>
                            <a class="btn btn-secondary border-secondary mx-2 p-0" href="">twitter <i
                                    class="fas fa-chevron-circle-right"></i></a>
                            <a class="btn btn-secondary border-secondary mx-2 p-0" href="">instagram <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary pe-3">Let’s Connect</h5>
                    </div>
                    <h1 class="display-5 mb-4">Send Your Message</h1>
                    <p class="mb-3">If you have any questions or need assistance, please feel free to reach out using the
                        form below. <strong>We're here to help you!</strong></p>
                    <form>
                        <div class="row g-4">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="project" placeholder="Project">
                                    <label for="project">Your Project</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="office pt-5">
                <div class="col-12 pt-5 wow zoomIn" data-wow-delay="0.1s">
                    <div class="rounded h-100">
                        <iframe class="rounded w-100" style="height: 500px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.8915155125464!2d106.84145537499018!3d-6.183059193804441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5425a168055%3A0xc1d79fd15a17dd56!2sPT.%20Virtual%20Inter%20Komunika!5e1!3m2!1sid!2sid!4v1729498268321!5m2!1sid!2sid"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->
@endsection
