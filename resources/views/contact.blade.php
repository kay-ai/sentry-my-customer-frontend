@extends('layout.frontbase')
@section("custom_css")
<link href="/frontend/assets/css/about.css" rel="stylesheet" type="text/css" />
<link href="/frontend/assets/css/contact-us.css" rel="stylesheet" type="text/css" />
@stop


@section('content')

<section id="main">
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
                    {{-- <div class="p-b-40 text-center">
                        <a class="welcome-btn play-store-btn mr-2 mb-2" href="#"><img
                                src="/frontend/assets/img/bg-img/bt-1.png" alt=""></a>

                        <a class="welcome-btn app-store-btn mr-2 mb-2" href="#"><img
                                src="/frontend/assets/img/bg-img/bt-2.png" alt=""></a>
                    </div> --}}
                </div>
            </section>
        </div>
        <div class="about-background-right">
            <img src="/frontend/assets/images/bg_vector_3.svg" alt="">
            <img src="/frontend/assets/images/bg_vector_4.svg" alt="">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="">
                    <p class="form-head">Let’s Keep in Touch</p>
                    <input type="text" placeholder="Full Name" name="Full Name" class="name-input">
                    <input type="email" name="Email" id="Email" placeholder="Email">
                    <div class="custom-select">
                        <select>
                            <option value="Subject" selected>Subject</option>
                            <option value="General Enquiries">General Enquiries</option>
                            <option value="Suggestion">Suggestion</option>
                            <option value="Fix Bugs">Fix Bugs</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <textarea name="Message" id="Message" placeholder="Your Message Here"></textarea>
                    <div class="button"><a href=""><img src="frontend/assets/img/icon-img/send.svg" alt="icon"
                                class="send">Send</a></div>
                </form>
            </div>
            <div class="col-lg-6">
                <div>
                    <div class="contact-extra">
                        <p class="subhead">Whatsapp</p>
                        <p class="subhead-text">09096823115</p>
                        <p class="subhead">Email Us</p>
                        <p class="subhead-text" id="st-1"><a href="mailto:Help@mycustomer.com">Help@mycustomer.com</a>
                        </p>
                        <p class="subhead">Working Hours: 9 AM - 11 PM</p>
                        <div class="map-area">
                            <iframe class="map-iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.098727562492!2d3.3773159144495124!3d6.509186125136247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8cf61c9c63c5%3A0xf54f4044acbfc478!2sThe%20HNG%20Internship!5e0!3m2!1sen!2sng!4v1592601378471!5m2!1sen!2sng"
                                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                        <p class="subhead">Find us at,</p>
                        <p class="subhead-text subhead-address">HNG <br> 3 Birrel Ave, Sabo yaba 100001, <br> Lagos,
                            Nigeria.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section("javascript")


@stop
