
@extends('layout.base')
@section("custom_css")
    <link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="/backend/assets/css/add_creditor.css">
@stop
        @section('content')
                <div class="content">

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-7 mb-0">
                                <div class="card mb-3 mt-5 creditor-card">
                                    <h4 class="pl-3 float-left text-white"> Add Creditor</h4>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstname">First Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="uil uil-atm-card"></i>
                                                                </span>
                                                            </div>
                                                            <input type="email" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter First Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastname">Last Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="uil uil-atm-card"></i>
                                                                </span>
                                                            </div>
                                                            <input type="email" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            @
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phonenumber">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    <input type="tel" id="phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phonenumber">Amount</label>
                                                        <input type="number" class="form-control" id="phonenumber" placeholder="Enter Amount">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phonenumber">Date due</label>
                                                        <input type="date" class="form-control" id="phonenumber" placeholder="Enter Due Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        </form>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                            </div>
                            <div class="col-md-5 mb-0">
                                <div class="card contact-list mb-0 mt-2 shadow-none p-3">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="task-search d-inline-block">
                                                <form>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control search-input"
                                                            placeholder="Search..." />
                                                        <span class="uil uil-search icon-search"></span>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-soft-primary" type="button">
                                                                <i class='uil uil-file-search-alt'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="float-sm-right mt-3 mt-sm-0">
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class='uil uil-sort-amount-down'></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Due Date</a>
                                                        <a class="dropdown-item" href="#">Added Date</a>
                                                        <a class="dropdown-item" href="#">Assignee</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-warning mt-3 mb-3 pl-3">Add Creditor from Contacts</div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td scope="row"><img src="/backend/assets/images/users/avatar-1.jpg" class="avatar-sm rounded-circle"/></td>
                                                    <td><b>John Doe </b> &nbsp; &nbsp;<span class="badge badge-success">Has debt</span><br>
                                                        <small>09072837921 </small>
                                                    </td>
                                                    <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#AmountModal"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="/backend/assets/images/users/avatar-6.jpg" class="avatar-sm rounded-circle"/></td>
                                                    <td><b>Mary Doe </b> &nbsp; &nbsp;<span class="badge badge-success">Has debt</span><br>
                                                        <small>09072837921 </small>
                                                    </td>
                                                    <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#AmountModal"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="/backend/assets/images/users/avatar-1.jpg" class="avatar-sm rounded-circle"/></td>
                                                    <td><b>Chris Kelvin </b><br>
                                                        <small>09072837921 </small>
                                                    </td>
                                                    <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#AmountModal"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="/backend/assets/images/users/avatar-3.jpg" class="avatar-sm rounded-circle"/></td>
                                                    <td><b>Luke Brown</b><br>
                                                        <small>09072837921 </small>
                                                    </td>
                                                    <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#AmountModal"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="/backend/assets/images/users/avatar-5.jpg" class="avatar-sm rounded-circle"/></td>
                                                    <td><b>Lynda Doe </b> &nbsp; &nbsp;<span class="badge badge-danger">Has credit</span><br>
                                                        <small>09072837921 </small>
                                                    </td>
                                                    <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#AmountModal"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="/backend/assets/images/users/avatar-2.jpg" class="avatar-sm rounded-circle"/></td>
                                                    <td><b>Alvin Chris</b><br>
                                                        <small>09072837921 </small>
                                                    </td>
                                                    <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#AmountModal"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="/backend/assets/images/users/avatar-3.jpg" class="avatar-sm rounded-circle"/></td>
                                                    <td><b>Henry Doe</b> &nbsp; &nbsp;<span class="badge badge-danger">Has credit</span><br>
                                                        <small>09072837921 </small>
                                                    </td>
                                                    <td><a name="" id="" class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#AmountModal"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="AmountModal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Enter Amount</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="form-group row mb-3">
                                        <label for="inputphone" class="col-3 col-form-label">Amount</label>
                                        <div class="col-9">
                                            <input type="number" class="form-control" id="inputphone" placeholder="Enter Amount">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-primary btn-block ">Submit</button>
                                        </div>
                                    </div>
                                </form>
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
