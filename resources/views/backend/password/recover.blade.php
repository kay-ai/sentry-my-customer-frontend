@extends('layout.authbase')
@section("custom_css")

<link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css" />

@stop



@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-4 bg-white">
            <div class=" m-h-100">
                <div class="account-pages pt-5">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-12 p-5">
                                        <div class="mx-auto mb-5">
                                            <a href="index.html">
                                                <img src="{{ ('/frontend/assets/images/fulllogo.png') }}" alt=""
                                                    height="auto" /> </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-4">Reset Password</h6>
                                        <p class="text-muted mt-1 mb-5">
                                            Enter your Phone Number and we'll send you a token with instructions to
                                            reset your password.
                                        </p>

                                        
                                        <form action="{{ route('password.reset') }}" class="authentication-form" method="POST">
                                            @csrf

                                            <div class="form-group">
                                                <label class="form-control-label">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="tel" id="phone" name="phone_number" class="form-control" required>

                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit"> Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Back to <a href="/admin/login"
                                        class="text-primary font-weight-bold ml-1">Login</a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                    <!-- end row -->
                    <!-- end container -->
                </div>
                <!-- end page -->


            </div>
        </div>
        <div class="col-lg-8 d-none d-md-block bg-cover"
            style="background-image: url(/backend/assets/images/login.svg);">

        </div>
    </div>
</div>

@endsection


@section("javascript")
<script src="/backend/assets/build/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // any initialisation options go here
    });
</script>


@stop
