@extends('layout.base')

@section("custom_css")
    <link href="/backend/assets/css/add-assistant.css" rel="stylesheet" type="text/css"/>

@stop

    @section('content')

    <!-- Start Content-->
    <div class="container-fluid h-100">
        <div class="row page-title">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                </nav>
                <h4 class="mb-1 mt-0"><i data-feather="users" style="font-size: 5px; margin-right: 7px"></i>Add new store assistant</h4>
            </div>
        </div>


        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="mb-3 header-title mt-0">Complaint Form</h4> --}}

                    <form action=" {{ route('assistant.store') }}" method="POST" class="mt-4 mb-3 form-horizontal my-form">
                        @csrf
                        <div class="form-group row mb-3">
                                <label for="name" class="col-2 col-sm-3 col-form-label my-label">Name:</label> <br> <br>
                                <div class="col-10 col-sm-7">
                                    <input name="name" type="text" class="form-control" id="fullname" placeholder="Enter name here">
                                </div>
                            </div>
                            <br>
                            {{-- <div class="form-group row mb-3">
                                <label for="role" class="col-2 col-sm-3 col-form-label my-label">Role:</label> <br>
                                <div class="col-10 col-sm-7">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter role">
                                </div>
                            </div>
                            <br>   --}}
                            <div class="form-group row mb-3">
                                <label for="address" class="col-2 col-sm-3 col-form-label my-label">Address:</label> <br>
                                <div class="col-10 col-sm-7">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter Address">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-3">
                                <label for="number" class="col-2 col-sm-3 col-form-label my-label">Phone Number:</label> <br>
                                <div class="col-10 col-sm-7">
                                    <input name="phone_number" type="text" class="form-control" id="fullname" placeholder="Enter phone number">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-2 col-sm-3 col-form-label my-label">Email:</label> <br>
                                <div class="col-10 col-sm-7">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter email">
                                </div>
                            </div>
                            <br>
                            <div class="form-group mb-0 justify-content-end row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary my-button">Save</button>
                                </div>
                            </div>
                        </form>

                    </div>  <!-- end card-body -->
                </div>
            </div>
            <!-- end col -->
    </div> <!-- container-fluid -->

    @endsection
