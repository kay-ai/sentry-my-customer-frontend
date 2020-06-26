
    @extends('layout.base')
    @section("custom_css")
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

    @stop
           @section('content')
              <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-md-12">
                                <nav aria-label="breadcrumb" class="float-right mt-1">
                                    <a href="/backend/users" class="btn btn-primary">Go Back</a>
                                    {{-- <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                    </ol> --}}
                                </nav>
                                <h4 class="mb-1 mt-0">Profile</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center mb-4">
                                            <img src="assets/images/users/avatar-7.jpg" alt=""
                                                class="avatar-lg rounded-circle" />
                                            <h5 class="mt-2 mb-0">John Doe</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-0">johndoe@doetech.com </h6>
                                        </div>
                                        <div class="border-top pt-2">
                                            <h4 class="mb-3 font-size-15">House Address</h4>
                                            <p class="text-muted mb-4">1975 Boring Lane, San Francisco, California, United States - 94108.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-activity-tab" data-toggle="pill"
                                                    href="#pills-activity" role="tab" aria-controls="pills-activity"
                                                    aria-selected="true">
                                                    Basic Information
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-messages-tab" data-toggle="pill"
                                                    href="#pills-messages" role="tab" aria-controls="pills-messages"
                                                    aria-selected="false">
                                                    Transactions
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-projects-tab" data-toggle="pill"
                                                    href="#pills-projects" role="tab" aria-controls="pills-projects"
                                                    aria-selected="false">
                                                    Messages
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-activity" role="tabpanel" aria-labelledby="pills-activity-tab">
                                                <p class="sub-header mb-0">
                                                    Account Information
                                                </p>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0 text-muted">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Email</th>
                                                                <td>johndoe@doetech.com</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Tel</th>
                                                                <td>+234 90 00 000 000</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Status</th>
                                                                <td><span class="badge badge-danger">Has debt</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Customer Type</th>
                                                                <td>Good Debtor</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- messages -->
                                            <div class="tab-pane" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                                                <p class="sub-header mb-0">
                                                    Transactions
                                                </p>
                                                <div class="card-body">
                                                    <div class="">
                                                        <table class="table mb-0 table-responsive">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Transaction Id</th>
                                                                    <th scope="col">Amount Due</th>
                                                                    <th scope="col">Amount Paid</th>
                                                                    <th scope="col">Balance</th>
                                                                    <th scope="col">Expected Pay Date</th>
                                                                    <th scope="col">View more</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td scope="row">C1290D</td>
                                                                    <td>&#8358; 6 000</td>
                                                                    <td>&#8358; 3 500</td>
                                                                    <td class="text-danger">&#8358; 2 500</td>
                                                                    <td>1st July, 2020</td>
                                                                    <td><a href="/backend/view_transaction"><i data-feather="eye"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">C5530V</td>
                                                                    <td>&#8358; 3 000</td>
                                                                    <td>&#8358; 3 000</td>
                                                                    <td class="text-success">&#8358; 0</td>
                                                                    <td>25th June, 2020</td>
                                                                    <td><a href="/backend/view_transaction"><i data-feather="eye"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">C1690D</td>
                                                                    <td>&#8358; 4 200</td>
                                                                    <td>&#8358; 4 000</td>
                                                                    <td class="text-danger">&#8358; 200</td>
                                                                    <td>25th June, 2020</td>
                                                                    <td><a href="/backend/view_transaction"><i data-feather="eye"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">C7890A</td>
                                                                    <td>&#8358; 6 000</td>
                                                                    <td>&#8358; 6 000</td>
                                                                    <td class="text-success">&#8358; 0</td>
                                                                    <td>20th June, 2020</td>
                                                                    <td><a href="/backend/view_transaction"><i data-feather="eye"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">C1420D</td>
                                                                    <td>&#8358; 10 000</td>
                                                                    <td>&#8358; 10 000</td>
                                                                    <td class="text-success">&#8358; 0</td>
                                                                    <td>15th June, 2020</td>
                                                                    <td><a href="/backend/view_transaction"><i data-feather="eye"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">C1245J</td>
                                                                    <td>&#8358; 8 300</td>
                                                                    <td>&#8358; 8 300</td>
                                                                    <td class="text-success">&#8358; 0</td>
                                                                    <td>5th June, 2020</td>
                                                                    <td><a href="/backend/view_transaction"><i data-feather="eye"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td scope="row">C1267Y</td>
                                                                    <td>&#8358; 12 040</td>
                                                                    <td>&#8358; 12 040</td>
                                                                    <td class="text-success">&#8358; 0</td>
                                                                    <td>2nd June, 2020</td>
                                                                    <td><a href="/backend/view_transaction"><i data-feather="eye"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pills-projects" role="tabpanel"
                                                aria-labelledby="pills-projects-tab">
                                                <p class="sub-header">
                                                    All Messages
                                                </p>
                                                <div class="table-responsive">
                                                    <table class="table mb-0" id="basic-datatable">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Transaction ID</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Message</th>
                                                            <th scope="col">Publish Date</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td><span>TR00001</span> <span
                                                                        class="badge badge-primary">Transaction type</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-success">Transaction success</span> <span
                                                                        class="badge badge-danger">Transaction failed</span>
                                                            </td>
                                                            <td>Transaction message would be here
                                                            </td>
                                                            <td>
                                                                2019-01-01
                                                            </td>

                                                            <td>
                                                                <div class="btn-group mt-2 mr-1">
                                                                    <button type="button" class="btn btn-info dropdown-toggle"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                        Actions<i class="icon"><span data-feather="chevron-down"></span></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->

                </div>
            @endsection


        @section("javascript")



        @stop
