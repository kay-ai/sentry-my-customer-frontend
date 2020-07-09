@extends('layout.base')
@section("custom_css")
<link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
<link rel="stylesheet" href="backend/assets/css/all_users.css">
@stop
@section('content')
<div class="content">
    <div class="container-fluid">
        @if(Session::has('message') || $errors->any())
        <br>
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
        @endif
        <div class="row page-title">
            <div class="col-md-12">
                <h4 class="mb-1 mt-0 float-left">My Customers</h4>
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#CustomerModal">
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

                                <div class="form-group col-lg-6 mt-4">
                                    <label class="form-control-label">Customer Name</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="uil uil-atm-card"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="password">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 mt-4">
                                    <label class="form-control-label">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="tel" id="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>


        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-activity-tab" data-toggle="pill" href="#pills-activity"
                                role="tab" aria-controls="pills-activity" aria-selected="true">
                                Debtors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-messages-tab" data-toggle="pill" href="#pills-messages"
                                role="tab" aria-controls="pills-messages" aria-selected="false">
                                Creditors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-projects-tab" data-toggle="pill" href="#pills-projects"
                                role="tab" aria-controls="pills-projects" aria-selected="false">
                                All Customers
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-activity" role="tabpanel"
                            aria-labelledby="pills-activity-tab">
                            <div class="row">
                                <div class="col-md-7 col-sm-6">
                                    <p class="sub-header float-left">
                                        List of Debtors
                                    </p>
                                    <p class="sub-header float-right">
                                        <span class="badge badge-pill badge-soft-dark">Customers Owe you: &#8358;
                                            3500</span>
                                    </p>
                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <a href="#" class="btn btn-sm btn-primary float-right" data-toggle="modal"
                                        data-target="#DebtModal">
                                        <i class="fa fa-plus my-float"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0" id="basic-datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Avatar</th>
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
                                            <td><img src="/backend/assets/images/users/avatar-1.jpg"
                                                    class="avatar-sm rounded-circle" alt="Shreyu" /></td>
                                            <td>John Doe <br>
                                                <span class="badge badge-success">Has debt</span>
                                            </td>
                                            <td>+234 90 000 000 00<br>
                                            </td>
                                            <td>
                                                <span> &#8358; 6 000</span> <br>
                                                <span class="badge badge-primary">Paid: 3 500</span>
                                            </td>
                                            <td>
                                                <span class="text-success">&#8358; 2 500</span>
                                            </td>
                                            <td>
                                                <div class="btn-group mt-2 mr-1">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Actions<i class="icon"><span
                                                                data-feather="chevron-down"></span></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{ route('customer.edit', 2) }}">Edit Customer</a>
                                                        <a class="dropdown-item" href="{{ route('customer.show', 2) }}">ViewProfile</a>
                                                        <a class="dropdown-item" href="{{ route('transaction.show', 2) }}">ViewTransaction</a>
                                                        <a class="dropdown-item" href="{{ route('debtor.create') }}">SendReminder</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row">2</td>
                                            <td><img src="/backend/assets/images/users/avatar-6.jpg"
                                                    class="avatar-sm rounded-circle" alt="Shreyu" /></td>
                                            <td>Mary Doe <br>
                                                <span class="badge badge-success">Has Debt</span>
                                            </td>
                                            <td>+44 0000 123456 <br>
                                            </td>
                                            <td>
                                                <span> &#8358; 10 000</span> <br>
                                                <span class="badge badge-primary">Paid: 9 000</span>
                                            </td>
                                            <td>
                                                <span class="text-success">&#8358; 1 000</span>
                                            </td>
                                            <td>
                                                <div class="btn-group mt-2 mr-1">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Actions<i class="icon"><span
                                                                data-feather="chevron-down"></span></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{ route('customer.edit', 1) }}">Edit Customer</a>
                                                        <a class="dropdown-item" href="{{ route('customer.show', 1) }}">ViewProfile</a>
                                                        <a class="dropdown-item" href="{{ route('transaction.show', 1) }}">ViewTransaction</a>
                                                        <a class="dropdown-item" href="{{ route('debtor.create') }}">SendReminder</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- messages -->
                        <div class="tab-pane" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                            <div class="row">
                                <div class="col-md-7 col-sm-6">
                                    <p class="sub-header float-left">
                                        List of Creditors
                                    </p>
                                    <p class="sub-header float-right">
                                        <span class="badge badge-pill badge-soft-danger">You owe: &#8358; 3500</span>
                                    </p>
                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <a href="#" class="btn btn-sm btn-primary float-right" data-toggle="modal"
                                        data-target="#CreditModal">
                                        <i class="fa fa-plus my-float"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <table class="table mb-0" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Avatar</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Tel</th>
                                                <th scope="col">Credit</th>
                                                <th scope="col">Balance</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td><img src="/backend/assets/images/users/avatar-5.jpg"
                                                        class="avatar-sm rounded-circle" alt="Shreyu" /></td>
                                                <td>Lynda Doe <br>
                                                    <span class="badge badge-danger">Has Credit</span>
                                                </td>
                                                <td>+234 90 000 000 00<br>
                                                </td>
                                                <td>
                                                    <span> &#8358; 1 500</span> <br>
                                                    <span class="badge badge-primary">You Paid: 1000</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">&#8358; 500</span>
                                                </td>
                                                <td>
                                                    <div class="btn-group mt-2 mr-1">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Actions<i class="icon"><span
                                                                    data-feather="chevron-down"></span></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{ route('customer.edit', 1) }}">Edit Customer</a>
                                                            <a class="dropdown-item" href="{{ route('customer.show', 1) }}">ViewProfile</a>
                                                            <a class="dropdown-item" href="{{ route('transaction.show', 1) }}">ViewTransaction</a>
                                                            <a class="dropdown-item" href="{{ route('debtor.create') }}">SendReminder</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">2</td>
                                                <td><img src="/backend/assets/images/users/avatar-3.jpg"
                                                        class="avatar-sm rounded-circle" alt="Shreyu" /></td>
                                                <td>Henry Doe <br>
                                                    <span class="badge badge-danger">Has Credit</span>
                                                </td>
                                                <td>+44 0000 123456 <br>
                                                </td>
                                                <td>
                                                    <span> &#8358; 2 560</span> <br>
                                                    <span class="badge badge-primary">You Paid: 2 000</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">&#8358; 560</span>
                                                </td>
                                                <td>
                                                    <div class="btn-group mt-2 mr-1">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Actions<i class="icon"><span
                                                                    data-feather="chevron-down"></span></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{ route('customer.edit', 1) }}">Edit Customer</a>
                                                            <a class="dropdown-item" href="{{ route('customer.show', 1) }}">ViewProfile</a>
                                                            <a class="dropdown-item" href="{{ route('transaction.show', 1) }}">ViewTransaction</a>
                                                            <a class="dropdown-item" href="{{ route('debtor.create') }}">SendReminder</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        @if ( isset($response) && count($response) > 0 )
                            <div class="tab-pane fade" id="pills-projects" role="tabpanel"
                                aria-labelledby="pills-projects-tab">
                                <div class="col-md-12">
                                    <p class="sub-header float-left">
                                        List of Regitered Customers
                                    </p>
                                    <a href="#" class="btn btn-sm btn-primary float-right" data-toggle="modal"
                                        data-target="#CustomerModal">
                                        <i class="fa fa-plus my-float"></i>
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table mb-0" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Avatar</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Tel</th>
                                                <th scope="col">Amount Due</th>
                                                <th scope="col">Balance</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < count($response); $i++)
                                                <tr>
                                                    <td scope="row">{{$i + 1}}</td>
                                                    <td><img src="/backend/assets/images/users/avatar-5.jpg"
                                                            class="avatar-sm rounded-circle" alt="Shreyu" /></td>
                                                    <td>{{isset($response[$i]->name) ? ucfirst($response[$i]->name) : 'Not available'}}<br>
                                                        <span class="badge badge-danger">Has Credit</span>
                                                    </td>
                                                    <td>{{isset($response[$i]->phone_number) ? $response[$i]->phone_number : 'Not available'}}<br>
                                                    </td>
                                                    <td>
                                                        <span> &#8358; 1 500</span> <br>
                                                        <span class="badge badge-primary">You Paid: 1000</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-danger">&#8358; 500</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group mt-2 mr-1">
                                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Actions<i class="icon"><span
                                                                        data-feather="chevron-down"></span></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="{{ route('customer.edit', $response[$i]->_id) }}">Edit Customer</a>
                                                                <a class="dropdown-item" href="{{ route('customer.show', $response[$i]->_id) }}">ViewProfile</a>
                                                                <a class="dropdown-item" href="{{ route('transaction.show', 1) }}">ViewTransaction</a>
                                                                <a class="dropdown-item" href="{{ route('debtor.create') }}">SendReminder</a>
                                                                <form id="delete-form-{{ $response[$i]->_id }}" method="POST" action="{{ route('customer.destroy', $response[$i]->_id) }}"
                                                                    style="display:none">
                                                                    {{csrf_field()}}
                                                                    {{method_field('DELETE')}}
                                                                </form>
                                                                <a style="margin-left: 1.5rem;" class="text-danger" href="" onclick="
                                                                    if(confirm('Are you sure You want to delete this user'))
                                                                    {event.preventDefault(); document.getElementById('delete-form-{{ $response[$i]->_id }}').submit();}
                                                                    else{
                                                                    event.preventDefault();
                                                                }"> Delete </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                                {{$response->links()}}
                            </div>
                        @endif
                    </div>

                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
</div>
<div id="CustomerModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add New Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('customer.store') }}">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="inputphone" class="col-3 col-form-label">Phone Number</label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="inputphone" placeholder="Phone Number"
                                name="phone_number">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Customer Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Customer name"
                                name="name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Store Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Store name"
                                name="store_name">
                        </div>
                    </div>
                    <!-- <div class="form-group row mb-3">
                            <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password" name="repassword">
                            </div>
                        </div> -->
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

<div id="DebtModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add New Debtor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <input type="password" class="form-control" id="inputPassword5"
                                placeholder="Retype Password">
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

<div id="CreditModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add New Creditor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <input type="password" class="form-control" id="inputPassword5"
                                placeholder="Retype Password">
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
