
@extends('layout.base')
@section("custom_css")
    <link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="backend/assets/css/all_users.css">
@stop
        @section('content')
                <div class="content">

                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-md-12">
                                <h4 class="mb-1 mt-0 float-left">My Customers</h4>
                                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">
                                    New &nbsp;<i class="fa fa-plus my-float"></i>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="sub-header pb-0 mb-0">
                                            Customer Search
                                        </p>
                                        <small><em>Enter customer details to start search</em></small>
                                        <div class="container-fluid">
                                            <div class="row">
                                        <div class="form-group col-lg-4 mt-4">
                                            <div class="row">
                                                <label class="form-control-label">Reference Number</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="uil uil-file-search-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="password" >
                                                </div>
                                            </div>
                                        </div>

                                            <div class="form-group col-lg-4 mt-4">
                                                <label class="form-control-label">Customer Name</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="uil uil-atm-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="password" >
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4 mt-4">
                                                <label class="form-control-label">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="tel" id="phone" class="form-control">


                                                </div>
                                            </div>

                                                <button type="button" class="btn btn-primary">Search</button>
                                                </div>


                                            </div>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <h4 class="header-title mt-0 mb-1">Basic Data Table</h4> --}}
                                            <p class="sub-header">
                                                List of Registered Customers
                                                </p>
                                            <div class="table-responsive">
                                                 <table class="table mb-0" id="basic-datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Tel</th>
                                                    <th scope="col">Debt</th>
                                                    <th scope="col">Balance</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>John Doe <br>
                                                        <span class="badge badge-danger">Has debt</span>
                                                    </td>
                                                    <td>+234 90 000 000 00<br>
                                                    </td>
                                                    <td>
                                                        <span> &#8358; 6 000</span> <br>
                                                        <span class="badge badge-primary">Paid: 3 500</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger">&#8358; 2 500</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group mt-2 mr-1">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="/backend/view-customer">View Profile</a>
                                                                <a class="dropdown-item" href="#">Send Reminder</a>
                                                                <a class="dropdown-item" href="#">Call</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td scope="row">2</td>
                                                    <td>Mary Doe <br>
                                                        <span class="badge badge-success">Debt Cleared</span>
                                                    </td>
                                                    <td>+44 0000 123456 <br>
                                                    </td>
                                                    <td>
                                                        <span> &euro; 10 000</span> <br>
                                                        <span class="badge badge-primary">Paid: 10 000</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-success">&euro; 0</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group mt-2 mr-1">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="/backend/view-customer">View Profile</a>
                                                                <a class="dropdown-item" href="#">Send Reminder</a>
                                                                <a class="dropdown-item" href="#">Call</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>

                    </div>
                </div>
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel">Create New User</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                      <form class="form-horizontal">
                                            <div class="form-group row mb-3">
                                                <label for="inputphone" class="col-3 col-form-label">Phone Number</label>
                                                <div class="col-9">
                                                    <input type="number" class="form-control" id="inputphone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                                <div class="col-9">
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                                <div class="col-9">
                                                    <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end row">
                                                <div class="col-9">
                                                    <button type="submit" class="btn btn-primary btn-block ">Create User</button>
                                                </div>
                                            </div>
                                        </form>
                                                </div>
                                                                                                <div class="modal-footer">
                                                </div>

                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
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
