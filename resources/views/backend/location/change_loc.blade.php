@extends('layout.base')

    @section("custom_css")
    <link href="/frontend/assets/css/change-loc.css" rel="stylesheet" type="text/css" />
    @stop

    @section('content')

        <!-- Start Content-->

        <div class="container-fluid h-100">
            <div class="row page-title">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb" class="float-right mt-1">
                    </nav>
                    <h4 class="mb-3 mt-3">Change Store Location</h4>
                </div>
            </div>
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6">
                        
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4 mb-3 form-horizontal">
                                <div class="form-group mb-3">
                                    <label for="fullname" class="col-12 col-form-label">Street Address</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="str_add" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="col-12 col-form-label">Region</label>
                                    <div class="col-12">
                                        
                                        <input type="text" class="form-control" id="str_add" placeholder="Street Address">
                                        
                                    </div>             
                                </div>
                                <div class="form-group mb-3">
                                    <label for="message" class="col-12 col-form-label">Postcode</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="post_code" placeholder="Postcode">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="col-12 col-form-label">Country</label>
                                    <div class="col-12">
                                        <select id="country" class="form-control custom-select">
                                            <option>Algeria</option>
                                            <option>Belgium</option>
                                            <option>Czech</option>
                                            <option>Denmark</option>
                                            <option>England</option>
                                            <option>Nigeria</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="form-group mb-3">
                                    <label class="col-12 col-form-label">State</label>
                                    <div class="col-12">
                                        <select id="country" class="form-control custom-select">
                                            <option>Abia</option>
                                            <option>Benue</option>
                                            <option>Delta</option>
                                            <option>Enugu</option>
                                            <option>Gombe</option>
                                            <option>Imo</option>
                                        </select>
                                    </div>    
                                </div>
                                <br>
                                <div class="form-group mb-0 justify-content-end row">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit Location</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  <!-- end col -->

                <div class="col-lg-4" id="set">
                    <div class="card">
                        <div class="card-header bg-primary text-white  mb-3">
                            Settings and Preferences
                        </div>
                        <div class="card-body">
                            <div class="container fluid">
                                <div class="row">
                                    <div class="col-md-10">
                                    Default Language-English
                                    </div>
                                    <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-md-10">
                                    Default Currency-Naira
                                </div>
                                <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        </label>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-md-10">
                                        International Customer
                                </div>
                                <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        </label>
                                </div>
                            </div>
                            <hr>
                                <div class="row">
                                    <div class="col-md-10">
                                            Edit Location Form   
                                    </div>
                                    <div class="col-md-2">
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mb-2">
                                <div class="col-md-10">
                                    Notify Customers of Location change
                                </div>
                                <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        </label>
                                </div>
                            </div>
                            </div>
                            <a href="#" class="btn btn-primary btn-block">SAVE</a>
                        </div>
                    </div>
                </div>
                
            </div> <!-- container-fluid -->
        </div>
    @endsection