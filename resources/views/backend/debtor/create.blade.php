@extends('layout.base')
@section("custom_css")
    <link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css"/>

    {{-- <link rel="stylesheet" href="backend/assets/css/all_users.css"> --}}
@stop
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                    <h4 class="mb-1 mt-0">Debt Reminders</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#bs-example-modal-sm">
                        Create a debt reminder
                    </button>
                    <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog"
                         aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mySmallModalLabel">New Debt Reminder</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInput1"
                                                   aria-describedby="transactionid" placeholder="Transaction ID">
                                        </div>
                                        <div class="form-group">
                                                    <textarea class="form-control"
                                                              id="exampleInput2" placeholder="Message"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">Create Reminder</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title mt-0 mb-1">Basic Data Table</h4> --}}
                            <p class="sub-header">
                                Find Debts
                            </p>
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="form-group col-lg-4 mt-4">
                                        <div class="row">
                                            <label class="form-control-label">Transaction ID</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                </div>
                                                <input type="text" class="form-control" id="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 mt-4">
                                        <label class="form-control-label">Status</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                            </div>
                                            <input type="text" class="form-control" id="password">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 mt-4">
                                        <label class="form-control-label">Date Published</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                            </div>
                                            <input type="date" class="form-control" id="date">
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
                                List of all debts <br>
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
                                                    <a class="dropdown-item" href='show'>View</a>
                                                    <a class="dropdown-item" href='#'>Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
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
