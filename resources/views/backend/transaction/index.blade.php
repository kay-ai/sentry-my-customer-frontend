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
                <div class="h4"><i data-feather="file-text" class="icon-dual"></i> Transaction Center</div>
                @if(Session::has('message') || $errors->any())
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
                    @endif
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#CustomerModal">
                    New &nbsp;<i class="fa fa-plus my-float"></i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p class="sub-header">
                            Find Transaction
                        </p>
                        <div class="container-fluid">
                            <div class="row">

                        <div class="form-group col-lg-4 mt-4">
                            <div class="row">
                            <label class="form-control-label">Transaction Reference Id</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="lock"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="password" >
                            </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-4 mt-4">
                            <label class="form-control-label">Customer Reference</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="lock"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="password" >
                            </div>
                        </div>

                        <div class="form-group col-lg-4 mt-4">
                            <label class="form-control-label">Transaction Type</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    
                                </div>
                                <select id="phone" class="form-control">
                                    <option></option>
                                    <option>Receivables</option>
                                    <option>Paid</option>
                                    <option>Debt</option>
                                </select>


                            </div>
                        </div>
                        
                            <button type="button" class="btn btn-primary">Search</button>
                            </div>

                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <div class="card-header">
            <div class="h5">All Transactions</div>
        </div>
        
        <div class="card-body p-1 card">
            <div class="table-responsive table-data">
                <table id="basic-datatable" class="table dt-responsive nowrap">

                    <thead>
                        <tr>
                            <th>Ref Id</th>
                            <th>Ref Transaction Type</th>
                            <th>Customer Ref Code</th>
                            <th>Amount</th>
                            <th>Expected Pay Date</th>
                            <th>View more</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>TP00</td>
                            <td>Payment</td>
                            <td>TR 0264</td>
                            <td>$2000</td>
                            {{-- <td>{{ date('d M Y', strtotime($transaction->created_date)) }}</td> --}}
                            <td><a href="{{ route('transaction.show', 1) }}"><i data-feather="eye"></i></a></td>
                        </tr>
                    </tbody>
                </table>
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
                <h5 class="modal-title" id="myModalLabel">Add New Transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal"  id="addTransaction" method="POST" action="{{ route('transaction.store') }}">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="inputPassword5" class="col-3 col-form-label">Amount</label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="inputPassword5" name="amount"
                                placeholder="Amount">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputphone" class="col-3 col-form-label">Interest</label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="inputphone" name="interest" placeholder="Interest" >
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Total amount</label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="inputPassword3" name="total_amount" placeholder="Total amount">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Description</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="inputPassword3" name="description" placeholder="Description">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Transaction Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="inputPassword3" name="transaction_name" placeholder="Transaction Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Transaction Role</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="inputPassword3" name="transaction_role" placeholder="Transaction Role">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Store Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="inputPassword3" name="store_name" placeholder="Store Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="phone" class="col-3 col-form-label">Phone Number</label>
                        <div class="col-9">
                            <input type="tel" class="form-control" id="phone" name="phone_number"  placeholder="+2348134346556">
                        </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-primary btn-block ">Create Transaction</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
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
