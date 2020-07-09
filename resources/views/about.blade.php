@extends('layout.frontbase')
@section("custom_css")
<link href="/frontend/assets/css/about.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<section id="main ">
    <!-- About: Heading Section -->
    <div class="about_main">
        <div class="about-background-left">
            <img src="/frontend/assets/images/bg_vector_1.svg" alt="">
            <img src="/frontend/assets/images/bg_vector_2.svg" alt="">
        </div>
        <div class="container">
            <section id="about-header">
                <div class="about-content">
                    <div class="about-heading">
                        <h1>Helping small businesses <br>collect Money</h1>
                        <p class="about-heading-caption">We help small businesses collect money and automatically send
                            them reminders when it's time to pay.</p>
                    </div>
                    <div class="p-b-40 text-center">
                        <a class="welcome-btn play-store-btn mr-2 mb-2" href="#"><img
                                src="/frontend/assets/img/bg-img/bt-1.png" alt=""></a>

                        <a class="welcome-btn app-store-btn mr-2 mb-2" href="#"><img
                                src="/frontend/assets/img/bg-img/bt-2.png" alt=""></a>
                    </div>
                </div>
            </section>
        </div>
        <div class="about-background-right">
            <img src="/frontend/assets/images/bg_vector_3.svg" alt="">
            <img src="/frontend/assets/images/bg_vector_4.svg" alt="">
        </div>
    </div>

    <!-- About: Main Profile -->
    <div class="container ">

        <section id="about-profile">
            <div class="about-profile-image">
                <img src="/frontend/assets/images/Happy-Market-Woman 1.png" alt="our_company">
            </div>
            <div class="about-profile-content">
                <h2 class="about-profile-content-heading">Our Company</h2>
                <p> Voluptatibus, necessitatibus vitae impedit tempora quidem dolores at ad mollitia. Odit, unde
                    obcaecati. Culpa, tempore aperiam? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit
                    egestas enim massa urna varius. Cursus etiam sem nec enim et vitae.</p>
            </div>
        </section>
    </div>

    <!-- Feature Area -->
    <div class="feature-area section-padding-100-50" id="feature">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading text-center">
                        <h4>myCustomer features</h4>
                        <p>Aliquid qui tempore aspernatur earum, Qui dolores molestias minus esse cumque deleniti
                            impedit quo nostrum omnis et delectus.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="/frontend/assets/img/icon-img/4.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Trustworthy</h4>
                            <p class="mb-0">Our apps are trusted by over 1000 users across the globe</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="/frontend/assets/img/icon-img/5.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Easy to use</h4>
                            <p class="mb-0">We created software in such a way that it is easy to use and navigate</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="/frontend/assets/img/icon-img/9.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Fast</h4>
                            <p class="mb-0">With state of the art servers we introduce you to a new level of speed</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Feature Area -->


    <!-- About: Mission  -->


    <div class="container">
        <section id="about-mission">
            <div class="about-mission-heading">
                <h2>We're on a mission to help the world<br> to be a better place.</h2>
            </div>
        </section>
    </div>

    <!-- About: Collage -->

    <div class="container">
        <section id="about-collage">
            <div class="about-collage-images">
                <img id="collage_1" src="/frontend/assets/images/collage_1.svg" alt="collage_1">

                <img id="collage_4" src="/frontend/assets/images/collage_4.svg" alt="collage_4">
            </div>
            <div class="about-collage-images">
                <img id="collage_2" src="/frontend/assets/images/collage_2.svg" alt="collage_2">
                <img id="collage_5" src="/frontend/assets/images/collage_5.svg" alt="collage_5">
            </div>
            <div class="about-collage-images">
                <img id="collage_3" src="/frontend/assets/images/collage_3.svg" alt="collage_3">
                <img id="collage_6" src="/frontend/assets/images/collage_6.svg" alt="collage_6">
            </div>
        </section>
    </div>

    <!-- Client Feedback Area -->
    <div class="client-feedback-area section-padding-100 bg-gray" id="client">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading text-center">
                        <h4>Testimonials</h4>
                        <p>Our users are happy with us. Here are some of the countless feedback we have gotten so far
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="client-silder owl-carousel">
                        <!-- Single Slider -->
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <!-- Client Content -->
                                <div class="testimonial-img-container">
                                    <img src="/frontend/assets/images/kadet pic.jpeg" alt=""
                                        class="testimonial-img">
                                </div>
                                <div class="client-desc client-mt-50 testimonial__text">
                                    <p>I must explain to you how all this mistaken idea of will give you a complete
                                        denouncing pleasure and praising pain was born and I will give you a complete
                                        account of the system</p>

                                    <h4>Angel Diha - <span>England</span></h4>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slider -->
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <!-- Client Content -->
                                <div class="testimonial-img-container">
                                    <img src="/frontend/assets/images/kadet pic.jpeg" alt=""
                                        class="testimonial-img">
                                </div>
                                <div class="client-desc client-mt-50 testimonial__text">
                                    <p>I must explain to you how all this mistaken idea of will give you a complete
                                        denouncing pleasure and praising pain was born and I will give you a complete
                                        account of the system</p>

                                    <h4>Angel Diha - <span>England</span></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Feedback Area -->

    <!-- Footer Styling Begins -->

    <section id="footer-background">
        <img src="/frontend/assets/images/background.svg" alt="">
    </section>
</section>

@endsection


@section("javascript")


@stop
