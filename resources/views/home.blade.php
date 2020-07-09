@extends('layout.frontbase')
@section("custom_css")

@stop



@section('content')


<!-- Welcome-area-start -->
<div class="welcome-area theme-bg" id="home">
    <div class="welcome-bg-thumb opacity-9"
        style="background-image: url(/frontend/assets/img/bg-img/bg-patter.png);">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="welcome-content">
                    <h3 class="wow fadeInUp" data-wow-delay="0.4s">
                        Keep track of your <span class="welcome-span">debtors</span>
                    </h3>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">
                        MyCustomer is an on-demand, scalable ledger solution for small and medium sized businesses
                        globally.
                    </p>

                    <div class="top-button-container">
                        <a class="welcome-btn play-store-btn mr-2 mb-2" href="https://play.google.com/store/apps/details?id=me.customerpay.hngsentry&hl=en"><img
                                src="/frontend/assets/img/bg-img/bt-1.png" alt=""></a>

                        <a class="welcome-btn app-store-btn mr-2 mb-2" href="#"><img
                                src="/frontend/assets/img/bg-img/bt-2.png" alt=""></a>
                    </div>

                    <!-- <div class="slider-btn mt-30">
                            <a class="welcome-btn play-store-btn mr-2 mb-2" href="#"><imgs
                                    src="assets/img/bg-img/bt-1.png" alt=""></a>
                            <a class="welcome-btn app-store-btn mr-2 mb-2" href="#"><img
                                    src="assets/img/bg-img/bt-2.png" alt=""></a>
                        </div> -->
                </div>
            </div>

            <!-- <div class="col-md-5">
                    <div class="welcome-thumb">
                        <img src="assets/img/bg-img/illustration-23.png" alt="">
                    </div>
                </div> -->
        </div>
    </div>
</div>
<!-- Welcome-area-end -->

<!-- What we offer area start -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="feature-heading-container">
                <h2 class="feature__heading">
                    Here’s everything myCustomer offers just for you!
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="feature-container">
                <div class="feature__text">
                    <h3>Invoice reminders</h3>
                    <p>This solution helps <br> business owners send overdue invoice <br> reminders to customers</p>
                </div>
                  <div class="feature__image" data-aos="fade-right" data-aos-duration="1500">
                      <img src="{{asset('frontend/assets/images/screen two.png')}}" alt="screen"
                          class="feature__img__screen img-fluid">
                  </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="feature-container">
                <div class="feature__text">
                    <h3>Debt collection</h3>
                    <p>It makes it easier to keep track and manage debt collection easily through mobile devices</p>
                </div>
                  <div class="feature__image" data-aos="fade-up">
                      <img src="{{asset('frontend/assets/images/screen.png')}}" alt="" class="feature__img__screen img-fluid">
                  </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="feature-container">
                <div class="feature__text">
                    <h3>Sales messaging</h3>
                    <p>Provides a way for business owners to push unique sales messaging directly to their
                        customers.</p>
                </div>
                  <div class="feature__image" data-aos="fade-left" data-aos-duration="1500">
                      <img src="{{asset('frontend/assets/images/screen two.png')}}" alt="" class="feature__img__screen img-fluid">
                  </div>
            </div>
        </div>
    </div>
</div>

<!-- App Screen Shot Area -->
{{-- <div class="app-screen-shot-area section-padding-100" id="work">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="app-shot">
                    <div><img src="/frontend/assets/img/bg-img/21.png" alt=""></div>
                    <div><img src="/frontend/assets/img/bg-img/22.png" alt=""></div>
                    <div><img src="/frontend/assets/img/bg-img/23.png" alt=""></div>
                    <div><img src="/frontend/assets/img/bg-img/18.png" alt=""></div>
                    <div><img src="/frontend/assets/img/bg-img/19.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- App Screen Shot Area -->

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
              <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.4s" data-aos="flip-left" data-aos-duration="1500">
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
              <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.4s" data-aos="flip-up" data-aos-duration="1500">
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
              <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.8s" data-aos="flip-right" data-aos-duration="1500">
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

          <!-- Single Feature area -->
          <!-- <div class="col-md-6 col-lg-4">
                  <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.4s">
                      <!-- Feature Icon
                      <div class="feature-icon">
                          <img src="assets/img/icon-img/6.svg" alt="">
                      </div>
                      <!-- Single Feature Text
                      <div class="feature-content-text">
                          <h4>Drag &amp; Drop Building</h4>
                          <p class="mb-0">Add, delete and move elements around on the front end of your website.</p>
                      </div>
                  </div>
              </div> -->

          <!-- Single Feature area -->
          <!-- <div class="col-md-6 col-lg-4">
                  <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.8s">
                      <!-- Feature Icon
                      <div class="feature-icon">
                          <img src="assets/img/icon-img/7.svg" alt="">
                      </div>
                      <!-- Single Feature Text
                      <div class="feature-content-text">
                          <h4>Drag &amp; Drop Building</h4>
                          <p class="mb-0">Add, delete and move elements around on the front end of your website.</p>
                      </div>
                  </div>
              </div> -->

          <!-- Single Feature area -->
          <!-- <div class="col-md-6 col-lg-4">
                  <div class="single-feature-area text-center wow fadeInUp" data-wow-delay="0.8s">
                      <!-- Feature Icon
                      <div class="feature-icon">
                          <img src="assets/img/icon-img/8.svg" alt="">
                      </div>
                      <!-- Single Feature Text
                      <div class="feature-content-text">
                          <h4>Drag &amp; Drop Building</h4>
                          <p class="mb-0">Add, delete and move elements around on the front end of your website.</p>
                      </div>
                  </div>
              </div> -->
      </div>
  </div>
</div>
<!-- Feature Area -->

<!-- Why We Are Area -->
<div class="why-we-are-area bg-primary-dark section-padding-100-50" id="about">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
                <div class="why-we-content-text mb-50" data-aos="fade-right" data-aos-duration="1500">
                    <h3>See how myCustomer is impacting lives</h3>
                    <p>We have reached a wide number of small buisness owners in NIgeria and our goal is to reach small
                        buisness
                        owners all over Africa and keep impacting on their lives
                    </p>

                    <div class="button-area mt-50">
                        <a class="btn feature__action__btn boxed-btn" href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="video-us-thumb text-center" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="video-thumb">
                        <img src="/frontend/assets/images/Happy-Market-Woman 1.png" alt="">
                    </div>
                    <!-- Video Icon -->
                    <div class="video-icon">
                        <a href="https://www.youtube.com/watch?v=tu_7NVERrLc&t=82s" class="video-btn pulse"
                            id="videobtn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why We Are Area -->


<!-- Client Feedback Area -->

<div class="container cta-container">
    <div class="row">
        <div class="col-lg-12">
            <div class="call-to-download-container">
                <div class="call-to-download__heading">
                    <h2>Download the app and get started</h2>
                </div>
                <div class="call-to-download__buttons">
                    <a class="welcome-btn play-store-btn mr-2 mb-2" href="https://play.google.com/store/apps/details?id=me.customerpay.hngsentry&hl=en"><img
                            src="/frontend/assets/img/bg-img/bt-1.png" alt=""></a>

                    <a class="welcome-btn app-store-btn mr-2 mb-2" href="#" style="background: #FDA741"><img
                            src="/frontend/assets/img/bg-img/bt-2.png" alt=""></a>
                </div>
                <div class="call-to-download-floating-triangles">
                    <img src="/frontend/assets/images/Vector 3.png" alt="" class="floating__circle">
                    <img src="/frontend/assets/images/Vector 5.png" alt="" class="floating__circle">
                </div>
                <div class="call-to-download-floating-circle">
                    <img src="/frontend/assets/images/Ellipse 2.png" alt="" class="floating__circle">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to action area end -->


<!-- App Screen Shot Area -->
<div class="app-screen-shot-area section-padding-100" id="work" style="background: #f1f6fd;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="app-shot">
                    <div><img src="/frontend/assets/img/bg-img/21.png" alt=""></div>
                    <div><img src="/frontend/assets/img/bg-img/22.png" alt=""></div>
                    <div><img src="/frontend/assets/img/bg-img/23.png" alt=""></div>
                    <div><img src="/frontend/assets/img/bg-img/18.png" alt=""></div>
                    <div><img src="/frontend/assets/img/bg-img/19.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- App Screen Shot Area -->



<!-- Client Feedback Area -->
<div class="client-feedback-area section-padding-100" id="client">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading text-center">
                    <h4>Testimonials</h4>
                    <p>Our users are happy with us. Here are some of the countless feedback we have gotten so far</p>
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




@endsection


@section("javascript")


@stop
